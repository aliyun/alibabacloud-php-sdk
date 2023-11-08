<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\SDK\Bailian\V20230601\Models\ListServicesResponseBody\modelServices;
use AlibabaCloud\Tea\Model;

class ListServicesResponseBody extends Model
{
    /**
     * @var modelServices[]
     */
    public $modelServices;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example E45491D5-7E0A-42C6-9B21-91D1066B1475
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 30
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'modelServices' => 'ModelServices',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelServices) {
            $res['ModelServices'] = [];
            if (null !== $this->modelServices && \is_array($this->modelServices)) {
                $n = 0;
                foreach ($this->modelServices as $item) {
                    $res['ModelServices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelServices'])) {
            if (!empty($map['ModelServices'])) {
                $model->modelServices = [];
                $n                    = 0;
                foreach ($map['ModelServices'] as $item) {
                    $model->modelServices[$n++] = null !== $item ? modelServices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
