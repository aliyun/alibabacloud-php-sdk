<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class DescribeEslDevicesRequest extends Model
{
    /**
     * @example 18bc5a63****
     *
     * @var string
     */
    public $eslBarCode;

    /**
     * @example ESL_STATUS_ONLINE
     *
     * @var string
     */
    public $eslStatus;

    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example 20
     *
     * @var int
     */
    public $fromBatteryLevel;

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
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;

    /**
     * @example 80
     *
     * @var int
     */
    public $toBatteryLevel;

    /**
     * @example ESL_TYPE_E_INK
     *
     * @var string
     */
    public $type;

    /**
     * @example LOW_TEMPLATE
     *
     * @var string
     */
    public $typeEncode;
    protected $_name = [
        'eslBarCode'       => 'EslBarCode',
        'eslStatus'        => 'EslStatus',
        'extraParams'      => 'ExtraParams',
        'fromBatteryLevel' => 'FromBatteryLevel',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'storeId'          => 'StoreId',
        'toBatteryLevel'   => 'ToBatteryLevel',
        'type'             => 'Type',
        'typeEncode'       => 'TypeEncode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->eslStatus) {
            $res['EslStatus'] = $this->eslStatus;
        }
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->fromBatteryLevel) {
            $res['FromBatteryLevel'] = $this->fromBatteryLevel;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->toBatteryLevel) {
            $res['ToBatteryLevel'] = $this->toBatteryLevel;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeEncode) {
            $res['TypeEncode'] = $this->typeEncode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEslDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['EslStatus'])) {
            $model->eslStatus = $map['EslStatus'];
        }
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['FromBatteryLevel'])) {
            $model->fromBatteryLevel = $map['FromBatteryLevel'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['ToBatteryLevel'])) {
            $model->toBatteryLevel = $map['ToBatteryLevel'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeEncode'])) {
            $model->typeEncode = $map['TypeEncode'];
        }

        return $model;
    }
}
