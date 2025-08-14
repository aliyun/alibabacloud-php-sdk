<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetOrderDetailResponseBody\data\orderList\order\originalModuleConfig\originalModuleConfig;

class originalModuleConfig extends Model
{
    /**
     * @var originalModuleConfig[]
     */
    public $originalModuleConfig;
    protected $_name = [
        'originalModuleConfig' => 'originalModuleConfig',
    ];

    public function validate()
    {
        if (\is_array($this->originalModuleConfig)) {
            Model::validateArray($this->originalModuleConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originalModuleConfig) {
            if (\is_array($this->originalModuleConfig)) {
                $res['originalModuleConfig'] = [];
                $n1 = 0;
                foreach ($this->originalModuleConfig as $item1) {
                    $res['originalModuleConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['originalModuleConfig'])) {
            if (!empty($map['originalModuleConfig'])) {
                $model->originalModuleConfig = [];
                $n1 = 0;
                foreach ($map['originalModuleConfig'] as $item1) {
                    $model->originalModuleConfig[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
