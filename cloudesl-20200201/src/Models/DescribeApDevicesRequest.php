<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class DescribeApDevicesRequest extends Model
{
    /**
     * @example 112233445566
     *
     * @var string
     */
    public $apMac;

    /**
     * @example false
     *
     * @var bool
     */
    public $beActivate;

    /**
     * @var string
     */
    public $extraParams;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $model;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $status;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'apMac'       => 'ApMac',
        'beActivate'  => 'BeActivate',
        'extraParams' => 'ExtraParams',
        'model'       => 'Model',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'status'      => 'Status',
        'storeId'     => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }
        if (null !== $this->beActivate) {
            $res['BeActivate'] = $this->beActivate;
        }
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }
        if (isset($map['BeActivate'])) {
            $model->beActivate = $map['BeActivate'];
        }
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
