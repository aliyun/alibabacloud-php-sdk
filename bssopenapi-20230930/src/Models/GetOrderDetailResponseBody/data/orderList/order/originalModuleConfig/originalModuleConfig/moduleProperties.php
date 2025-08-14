<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig\moduleProperties\moduleProperties;

class moduleProperties extends Model
{
    /**
     * @var moduleProperties[]
     */
    public $moduleProperties;
    protected $_name = [
        'moduleProperties' => 'moduleProperties',
    ];

    public function validate()
    {
        if (\is_array($this->moduleProperties)) {
            Model::validateArray($this->moduleProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleProperties) {
            if (\is_array($this->moduleProperties)) {
                $res['moduleProperties'] = [];
                $n1 = 0;
                foreach ($this->moduleProperties as $item1) {
                    $res['moduleProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['moduleProperties'])) {
            if (!empty($map['moduleProperties'])) {
                $model->moduleProperties = [];
                $n1 = 0;
                foreach ($map['moduleProperties'] as $item1) {
                    $model->moduleProperties[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
