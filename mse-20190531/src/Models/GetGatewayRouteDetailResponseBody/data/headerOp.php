<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\headerOp\headerOpItems;

class headerOp extends Model
{
    /**
     * @var headerOpItems[]
     */
    public $headerOpItems;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'headerOpItems' => 'HeaderOpItems',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->headerOpItems)) {
            Model::validateArray($this->headerOpItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headerOpItems) {
            if (\is_array($this->headerOpItems)) {
                $res['HeaderOpItems'] = [];
                $n1 = 0;
                foreach ($this->headerOpItems as $item1) {
                    $res['HeaderOpItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['HeaderOpItems'])) {
            if (!empty($map['HeaderOpItems'])) {
                $model->headerOpItems = [];
                $n1 = 0;
                foreach ($map['HeaderOpItems'] as $item1) {
                    $model->headerOpItems[$n1] = headerOpItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
