<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponseBody\conflictCdsAndOrder;
use AlibabaCloud\Tea\Model;

class CreateCloudDriveServiceResponseBody extends Model
{
    /**
     * @description The ID of the attached cloud disk.
     *
     * @example cn-hangzhou+cds-7782057786
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The name of the cloud disk that is created in Cloud Drive Service.
     *
     * @example CDS_Windows_1126
     *
     * @var string
     */
    public $cdsName;

    /**
     * @example cen-638u3wxds9snyc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @var conflictCdsAndOrder
     */
    public $conflictCdsAndOrder;

    /**
     * @example test1.local
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @description The maximum capacity of each instance in Cloud Drive Service. Unit: GiB
     *
     * @example 213674622976
     *
     * @var string
     */
    public $maxSize;

    /**
     * @example AD_CONNECTOR
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 062B1439-709A-580E-85DF-CE97A1560565
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cdsId'               => 'CdsId',
        'cdsName'             => 'CdsName',
        'cenId'               => 'CenId',
        'conflictCdsAndOrder' => 'ConflictCdsAndOrder',
        'domainName'          => 'DomainName',
        'errorCode'           => 'ErrorCode',
        'maxSize'             => 'MaxSize',
        'officeSiteType'      => 'OfficeSiteType',
        'orderId'             => 'OrderId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->cdsName) {
            $res['CdsName'] = $this->cdsName;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->conflictCdsAndOrder) {
            $res['ConflictCdsAndOrder'] = null !== $this->conflictCdsAndOrder ? $this->conflictCdsAndOrder->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudDriveServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['CdsName'])) {
            $model->cdsName = $map['CdsName'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ConflictCdsAndOrder'])) {
            $model->conflictCdsAndOrder = conflictCdsAndOrder::fromMap($map['ConflictCdsAndOrder']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
