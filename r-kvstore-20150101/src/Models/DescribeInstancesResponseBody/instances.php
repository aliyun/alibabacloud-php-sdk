<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponseBody\instances\KVStoreInstance;

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
        if (\is_array($this->KVStoreInstance)) {
            Model::validateArray($this->KVStoreInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->KVStoreInstance) {
            if (\is_array($this->KVStoreInstance)) {
                $res['KVStoreInstance'] = [];
                $n1 = 0;
                foreach ($this->KVStoreInstance as $item1) {
                    $res['KVStoreInstance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['KVStoreInstance'])) {
            if (!empty($map['KVStoreInstance'])) {
                $model->KVStoreInstance = [];
                $n1 = 0;
                foreach ($map['KVStoreInstance'] as $item1) {
                    $model->KVStoreInstance[$n1] = KVStoreInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
