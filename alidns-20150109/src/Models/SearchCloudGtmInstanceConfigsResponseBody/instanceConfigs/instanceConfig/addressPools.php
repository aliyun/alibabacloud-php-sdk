<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstanceConfigsResponseBody\instanceConfigs\instanceConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstanceConfigsResponseBody\instanceConfigs\instanceConfig\addressPools\addressPool;

class addressPools extends Model
{
    /**
     * @var addressPool[]
     */
    public $addressPool;
    protected $_name = [
        'addressPool' => 'AddressPool',
    ];

    public function validate()
    {
        if (\is_array($this->addressPool)) {
            Model::validateArray($this->addressPool);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressPool) {
            if (\is_array($this->addressPool)) {
                $res['AddressPool'] = [];
                $n1                 = 0;
                foreach ($this->addressPool as $item1) {
                    $res['AddressPool'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AddressPool'])) {
            if (!empty($map['AddressPool'])) {
                $model->addressPool = [];
                $n1                 = 0;
                foreach ($map['AddressPool'] as $item1) {
                    $model->addressPool[$n1++] = addressPool::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
