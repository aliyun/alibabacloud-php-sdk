<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\billModuleConfig\billModuleConfig;

class billModuleConfig extends Model
{
    /**
     * @var billModuleConfig[]
     */
    public $billModuleConfig;
    protected $_name = [
        'billModuleConfig' => 'billModuleConfig',
    ];

    public function validate()
    {
        if (\is_array($this->billModuleConfig)) {
            Model::validateArray($this->billModuleConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billModuleConfig) {
            if (\is_array($this->billModuleConfig)) {
                $res['billModuleConfig'] = [];
                $n1 = 0;
                foreach ($this->billModuleConfig as $item1) {
                    $res['billModuleConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['billModuleConfig'])) {
            if (!empty($map['billModuleConfig'])) {
                $model->billModuleConfig = [];
                $n1 = 0;
                foreach ($map['billModuleConfig'] as $item1) {
                    $model->billModuleConfig[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
