<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data\moduleDetails\moduleDetail;

class moduleDetails extends Model
{
    /**
     * @var moduleDetail[]
     */
    public $moduleDetail;
    protected $_name = [
        'moduleDetail' => 'ModuleDetail',
    ];

    public function validate()
    {
        if (\is_array($this->moduleDetail)) {
            Model::validateArray($this->moduleDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleDetail) {
            if (\is_array($this->moduleDetail)) {
                $res['ModuleDetail'] = [];
                $n1 = 0;
                foreach ($this->moduleDetail as $item1) {
                    $res['ModuleDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ModuleDetail'])) {
            if (!empty($map['ModuleDetail'])) {
                $model->moduleDetail = [];
                $n1 = 0;
                foreach ($map['ModuleDetail'] as $item1) {
                    $model->moduleDetail[$n1] = moduleDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
