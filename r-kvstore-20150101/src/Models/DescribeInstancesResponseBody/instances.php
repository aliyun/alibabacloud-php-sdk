<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponseBody\instances\KVStoreInstance;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var KVStoreInstance[]
     */
    public $KVStoreInstance;
    protected $_name = [
        'KVStoreInstance' => 'KVStoreInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KVStoreInstance) {
            $res['KVStoreInstance'] = [];
            if (null !== $this->KVStoreInstance && \is_array($this->KVStoreInstance)) {
                $n = 0;
                foreach ($this->KVStoreInstance as $item) {
                    $res['KVStoreInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KVStoreInstance'])) {
            if (!empty($map['KVStoreInstance'])) {
                $model->KVStoreInstance = [];
                $n                      = 0;
                foreach ($map['KVStoreInstance'] as $item) {
                    $model->KVStoreInstance[$n++] = null !== $item ? KVStoreInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
