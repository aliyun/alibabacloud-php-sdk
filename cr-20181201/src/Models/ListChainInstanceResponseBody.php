<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainInstanceResponseBody\chainInstances;
use AlibabaCloud\Tea\Model;

class ListChainInstanceResponseBody extends Model
{
    /**
     * @description The number of entries to return on each page.
     *
     * @var chainInstances[]
     */
    public $chainInstances;

    /**
     * @description The version of the delivery chain.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The page number of the page to return.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The execution record of the delivery chain.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description 30
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Indicates whether the operation is successful.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the Container Registry instance.
     *
     * @example 838D1602-6D8F-47FB-B60A-656645D2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the repository.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'chainInstances' => 'ChainInstances',
        'code'           => 'Code',
        'instanceId'     => 'InstanceId',
        'isSuccess'      => 'IsSuccess',
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainInstances) {
            $res['ChainInstances'] = [];
            if (null !== $this->chainInstances && \is_array($this->chainInstances)) {
                $n = 0;
                foreach ($this->chainInstances as $item) {
                    $res['ChainInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChainInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainInstances'])) {
            if (!empty($map['ChainInstances'])) {
                $model->chainInstances = [];
                $n                     = 0;
                foreach ($map['ChainInstances'] as $item) {
                    $model->chainInstances[$n++] = null !== $item ? chainInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
