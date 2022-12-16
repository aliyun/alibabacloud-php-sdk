<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data\headerOp\headerOpItems;
use AlibabaCloud\Tea\Model;

class headerOp extends Model
{
    /**
     * @description The information about headers.
     *
     * @var headerOpItems[]
     */
    public $headerOpItems;

    /**
     * @description The status.
     *
     * @example off
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'headerOpItems' => 'HeaderOpItems',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerOpItems) {
            $res['HeaderOpItems'] = [];
            if (null !== $this->headerOpItems && \is_array($this->headerOpItems)) {
                $n = 0;
                foreach ($this->headerOpItems as $item) {
                    $res['HeaderOpItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headerOp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderOpItems'])) {
            if (!empty($map['HeaderOpItems'])) {
                $model->headerOpItems = [];
                $n                    = 0;
                foreach ($map['HeaderOpItems'] as $item) {
                    $model->headerOpItems[$n++] = null !== $item ? headerOpItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
