<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionRequest\products;

class DiduiAreaDeductionRequest extends Model
{
    /**
     * @var products[]
     */
    public $products;

    /**
     * @var string
     */
    public $ragId;

    /**
     * @var string
     */
    public $reqId;

    /**
     * @var string
     */
    public $targetImageUrl;
    protected $_name = [
        'products' => 'Products',
        'ragId' => 'RagId',
        'reqId' => 'ReqId',
        'targetImageUrl' => 'TargetImageUrl',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['Products'] = [];
                $n1 = 0;
                foreach ($this->products as $item1) {
                    $res['Products'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ragId) {
            $res['RagId'] = $this->ragId;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
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
        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n1 = 0;
                foreach ($map['Products'] as $item1) {
                    $model->products[$n1] = products::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RagId'])) {
            $model->ragId = $map['RagId'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }

        return $model;
    }
}
