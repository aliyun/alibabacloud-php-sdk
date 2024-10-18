<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachSharedStoragesRequest\sharedStorages;
use AlibabaCloud\Tea\Model;

class AttachSharedStoragesRequest extends Model
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
     * @description The information about the shared storage resources that you want to attach to the cluster.
     *
     * This parameter is required.
     * @var sharedStorages[]
     */
    public $sharedStorages;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'sharedStorages' => 'SharedStorages',
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
        if (null !== $this->sharedStorages) {
            $res['SharedStorages'] = [];
            if (null !== $this->sharedStorages && \is_array($this->sharedStorages)) {
                $n = 0;
                foreach ($this->sharedStorages as $item) {
                    $res['SharedStorages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachSharedStoragesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['SharedStorages'])) {
            if (!empty($map['SharedStorages'])) {
                $model->sharedStorages = [];
                $n                     = 0;
                foreach ($map['SharedStorages'] as $item) {
                    $model->sharedStorages[$n++] = null !== $item ? sharedStorages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
