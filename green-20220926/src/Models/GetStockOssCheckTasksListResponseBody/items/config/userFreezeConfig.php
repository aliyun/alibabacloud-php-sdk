<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetStockOssCheckTasksListResponseBody\items\config;

use AlibabaCloud\Tea\Model;

class userFreezeConfig extends Model
{
    /**
     * @var string
     */
    public $freezeRestorePath;

    /**
     * @var string
     */
    public $freezeType;
    protected $_name = [
        'freezeRestorePath' => 'FreezeRestorePath',
        'freezeType' => 'FreezeType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->freezeRestorePath) {
            $res['FreezeRestorePath'] = $this->freezeRestorePath;
        }
        if (null !== $this->freezeType) {
            $res['FreezeType'] = $this->freezeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userFreezeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FreezeRestorePath'])) {
            $model->freezeRestorePath = $map['FreezeRestorePath'];
        }
        if (isset($map['FreezeType'])) {
            $model->freezeType = $map['FreezeType'];
        }

        return $model;
    }
}
