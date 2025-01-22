<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class DeleteDataAssetTagShrinkRequest extends Model
{
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
