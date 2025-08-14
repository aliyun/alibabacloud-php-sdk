<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig\billModuleProperties\billModuleProperties;

class billModuleProperties extends Model
{
    /**
     * @var billModuleProperties[]
     */
    public $billModuleProperties;
    protected $_name = [
        'billModuleProperties' => 'billModuleProperties',
    ];

    public function validate()
    {
        if (\is_array($this->billModuleProperties)) {
            Model::validateArray($this->billModuleProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billModuleProperties) {
            if (\is_array($this->billModuleProperties)) {
                $res['billModuleProperties'] = [];
                $n1 = 0;
                foreach ($this->billModuleProperties as $item1) {
                    $res['billModuleProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['billModuleProperties'])) {
            if (!empty($map['billModuleProperties'])) {
                $model->billModuleProperties = [];
                $n1 = 0;
                foreach ($map['billModuleProperties'] as $item1) {
                    $model->billModuleProperties[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
