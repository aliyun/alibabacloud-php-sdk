<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class DetachSharedStoragesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $sharedStoragesShrink;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'sharedStoragesShrink' => 'SharedStorages',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->sharedStoragesShrink) {
            $res['SharedStorages'] = $this->sharedStoragesShrink;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['SharedStorages'])) {
            $model->sharedStoragesShrink = $map['SharedStorages'];
        }

        return $model;
    }
}
