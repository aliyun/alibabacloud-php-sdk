<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\UpdateAlarmRequest\payload;

use AlibabaCloud\Tea\Model;

class musicInfo extends Model
{
    /**
     * @var int
     */
    public $musicId;

    /**
     * @var string
     */
    public $musicName;

    /**
     * @var int
     */
    public $musicType;

    /**
     * @var string
     */
    public $musicTypeName;

    /**
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
     * @return musicInfo
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
