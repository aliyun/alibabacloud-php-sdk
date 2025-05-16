<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AttachSharedStoragesRequest\sharedStorages;

class AttachSharedStoragesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var sharedStorages[]
     */
    public $sharedStorages;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'sharedStorages' => 'SharedStorages',
    ];

    public function validate()
    {
        if (\is_array($this->sharedStorages)) {
            Model::validateArray($this->sharedStorages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->sharedStorages) {
            if (\is_array($this->sharedStorages)) {
                $res['SharedStorages'] = [];
                $n1 = 0;
                foreach ($this->sharedStorages as $item1) {
                    $res['SharedStorages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['SharedStorages'])) {
                $model->sharedStorages = [];
                $n1 = 0;
                foreach ($map['SharedStorages'] as $item1) {
                    $model->sharedStorages[$n1++] = sharedStorages::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
