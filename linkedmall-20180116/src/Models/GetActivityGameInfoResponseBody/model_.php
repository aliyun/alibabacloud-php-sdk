<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetActivityGameInfoResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $gameDTO;

    /**
     * @var string
     */
    public $gameShowInfo;

    /**
     * @var string
     */
    public $userGameCoinInfos;

    /**
     * @var string
     */
    public $userProcessDTO;
    protected $_name = [
        'extInfo'           => 'ExtInfo',
        'gameDTO'           => 'GameDTO',
        'gameShowInfo'      => 'GameShowInfo',
        'userGameCoinInfos' => 'UserGameCoinInfos',
        'userProcessDTO'    => 'UserProcessDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->gameDTO) {
            $res['GameDTO'] = $this->gameDTO;
        }
        if (null !== $this->gameShowInfo) {
            $res['GameShowInfo'] = $this->gameShowInfo;
        }
        if (null !== $this->userGameCoinInfos) {
            $res['UserGameCoinInfos'] = $this->userGameCoinInfos;
        }
        if (null !== $this->userProcessDTO) {
            $res['UserProcessDTO'] = $this->userProcessDTO;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['GameDTO'])) {
            $model->gameDTO = $map['GameDTO'];
        }
        if (isset($map['GameShowInfo'])) {
            $model->gameShowInfo = $map['GameShowInfo'];
        }
        if (isset($map['UserGameCoinInfos'])) {
            $model->userGameCoinInfos = $map['UserGameCoinInfos'];
        }
        if (isset($map['UserProcessDTO'])) {
            $model->userProcessDTO = $map['UserProcessDTO'];
        }

        return $model;
    }
}
