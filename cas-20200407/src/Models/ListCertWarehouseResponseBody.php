<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertWarehouseResponseBody\certWarehouseList;
use AlibabaCloud\Tea\Model;

class ListCertWarehouseResponseBody extends Model
{
    /**
     * @var certWarehouseList[]
     */
    public $certWarehouseList;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 50
     *
     * @var int
     */
    public $showSize;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'certWarehouseList' => 'CertWarehouseList',
        'currentPage'       => 'CurrentPage',
        'requestId'         => 'RequestId',
        'showSize'          => 'ShowSize',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certWarehouseList) {
            $res['CertWarehouseList'] = [];
            if (null !== $this->certWarehouseList && \is_array($this->certWarehouseList)) {
                $n = 0;
                foreach ($this->certWarehouseList as $item) {
                    $res['CertWarehouseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertWarehouseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertWarehouseList'])) {
            if (!empty($map['CertWarehouseList'])) {
                $model->certWarehouseList = [];
                $n                        = 0;
                foreach ($map['CertWarehouseList'] as $item) {
                    $model->certWarehouseList[$n++] = null !== $item ? certWarehouseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
