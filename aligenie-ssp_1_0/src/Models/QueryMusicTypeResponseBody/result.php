<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\QueryMusicTypeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $musicType;

    /**
     * @var string
     */
    public $musicTypeName;
    protected $_name = [
        'musicType'     => 'MusicType',
        'musicTypeName' => 'MusicTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->musicType) {
            $res['MusicType'] = $this->musicType;
        }
        if (null !== $this->musicTypeName) {
            $res['MusicTypeName'] = $this->musicTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MusicType'])) {
            $model->musicType = $map['MusicType'];
        }
        if (isset($map['MusicTypeName'])) {
            $model->musicTypeName = $map['MusicTypeName'];
        }

        return $model;
    }
}
