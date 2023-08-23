<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListMusicResponseBody\result;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $musicId;

    /**
     * @example xx
     *
     * @var string
     */
    public $musicName;

    /**
     * @example 1
     *
     * @var int
     */
    public $musicType;

    /**
     * @example xx
     *
     * @var string
     */
    public $musicTypeName;

    /**
     * @example http://xx
     *
     * @var string
     */
    public $musicUrl;
    protected $_name = [
        'musicId'       => 'MusicId',
        'musicName'     => 'MusicName',
        'musicType'     => 'MusicType',
        'musicTypeName' => 'MusicTypeName',
        'musicUrl'      => 'MusicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->musicId) {
            $res['MusicId'] = $this->musicId;
        }
        if (null !== $this->musicName) {
            $res['MusicName'] = $this->musicName;
        }
        if (null !== $this->musicType) {
            $res['MusicType'] = $this->musicType;
        }
        if (null !== $this->musicTypeName) {
            $res['MusicTypeName'] = $this->musicTypeName;
        }
        if (null !== $this->musicUrl) {
            $res['MusicUrl'] = $this->musicUrl;
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
        if (isset($map['MusicId'])) {
            $model->musicId = $map['MusicId'];
        }
        if (isset($map['MusicName'])) {
            $model->musicName = $map['MusicName'];
        }
        if (isset($map['MusicType'])) {
            $model->musicType = $map['MusicType'];
        }
        if (isset($map['MusicTypeName'])) {
            $model->musicTypeName = $map['MusicTypeName'];
        }
        if (isset($map['MusicUrl'])) {
            $model->musicUrl = $map['MusicUrl'];
        }

        return $model;
    }
}
