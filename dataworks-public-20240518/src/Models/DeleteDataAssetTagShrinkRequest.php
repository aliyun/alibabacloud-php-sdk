<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class DeleteDataAssetTagShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $valuesShrink;
    protected $_name = [
        'key'          => 'Key',
        'valuesShrink' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->valuesShrink) {
            $res['Values'] = $this->valuesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDataAssetTagShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Values'])) {
            $model->valuesShrink = $map['Values'];
        }

        return $model;
    }
}
