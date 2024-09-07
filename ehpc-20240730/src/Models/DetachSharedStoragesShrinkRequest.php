<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class DetachSharedStoragesShrinkRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The information about mounted shared storage resources.
     *
     * This parameter is required.
     * @var string
     */
    public $sharedStoragesShrink;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'sharedStoragesShrink' => 'SharedStorages',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DetachSharedStoragesShrinkRequest
     */
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
