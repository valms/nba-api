<?php

namespace JasonRoman\NbaApi\Request\Data\Cms\Game;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\GameIdParam;
use JasonRoman\NbaApi\Request\Data\Cms\AbstractDataCmsRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Get the recap of a game used by the CMS. Valid from 2012-2013 regular season and later.
 */
class RecapRequest extends AbstractDataCmsRequest
{
    const ENDPOINT = '/json/cms/noseason/game/{gameDate}/{gameId}/recap.json';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     *
     * @var \DateTime
     */
    public $gameDate;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(GameIdParam::FORMAT)
     *
     * @var string
     */
    public $gameId;
}