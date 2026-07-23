<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMiniGameInfoByAppResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $gameEngine;

    /**
     * @var string
     */
    public $gameMaker;

    /**
     * @var string
     */
    public $gameTypeLevel1;

    /**
     * @var string
     */
    public $gameTypeLevel2;

    /**
     * @var string
     */
    public $gameTypeLevel3;

    /**
     * @var string
     */
    public $gameVersionId;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $miniProgramCode;

    /**
     * @var int
     */
    public $miniProgramId;

    /**
     * @var string
     */
    public $miniProgramName;

    /**
     * @var string
     */
    public $slogan;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'gameEngine' => 'GameEngine',
        'gameMaker' => 'GameMaker',
        'gameTypeLevel1' => 'GameTypeLevel1',
        'gameTypeLevel2' => 'GameTypeLevel2',
        'gameTypeLevel3' => 'GameTypeLevel3',
        'gameVersionId' => 'GameVersionId',
        'gmtModified' => 'GmtModified',
        'icon' => 'Icon',
        'introduction' => 'Introduction',
        'miniProgramCode' => 'MiniProgramCode',
        'miniProgramId' => 'MiniProgramId',
        'miniProgramName' => 'MiniProgramName',
        'slogan' => 'Slogan',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gameEngine) {
            $res['GameEngine'] = $this->gameEngine;
        }

        if (null !== $this->gameMaker) {
            $res['GameMaker'] = $this->gameMaker;
        }

        if (null !== $this->gameTypeLevel1) {
            $res['GameTypeLevel1'] = $this->gameTypeLevel1;
        }

        if (null !== $this->gameTypeLevel2) {
            $res['GameTypeLevel2'] = $this->gameTypeLevel2;
        }

        if (null !== $this->gameTypeLevel3) {
            $res['GameTypeLevel3'] = $this->gameTypeLevel3;
        }

        if (null !== $this->gameVersionId) {
            $res['GameVersionId'] = $this->gameVersionId;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }

        if (null !== $this->miniProgramCode) {
            $res['MiniProgramCode'] = $this->miniProgramCode;
        }

        if (null !== $this->miniProgramId) {
            $res['MiniProgramId'] = $this->miniProgramId;
        }

        if (null !== $this->miniProgramName) {
            $res['MiniProgramName'] = $this->miniProgramName;
        }

        if (null !== $this->slogan) {
            $res['Slogan'] = $this->slogan;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameEngine'])) {
            $model->gameEngine = $map['GameEngine'];
        }

        if (isset($map['GameMaker'])) {
            $model->gameMaker = $map['GameMaker'];
        }

        if (isset($map['GameTypeLevel1'])) {
            $model->gameTypeLevel1 = $map['GameTypeLevel1'];
        }

        if (isset($map['GameTypeLevel2'])) {
            $model->gameTypeLevel2 = $map['GameTypeLevel2'];
        }

        if (isset($map['GameTypeLevel3'])) {
            $model->gameTypeLevel3 = $map['GameTypeLevel3'];
        }

        if (isset($map['GameVersionId'])) {
            $model->gameVersionId = $map['GameVersionId'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }

        if (isset($map['MiniProgramCode'])) {
            $model->miniProgramCode = $map['MiniProgramCode'];
        }

        if (isset($map['MiniProgramId'])) {
            $model->miniProgramId = $map['MiniProgramId'];
        }

        if (isset($map['MiniProgramName'])) {
            $model->miniProgramName = $map['MiniProgramName'];
        }

        if (isset($map['Slogan'])) {
            $model->slogan = $map['Slogan'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
