<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\dataInitializationDetailList;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\dataSynchronizationDetailList;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList;
use AlibabaCloud\Tea\Model;

class DescribeMigrationJobDetailResponseBody extends Model
{
    /**
     * @description The maximum number of data migration instances that can be displayed on one page.
     *
     * @var dataInitializationDetailList
     */
    public $dataInitializationDetailList;

    /**
     * @description The error message returned if full data migration failed.
     *
     * @var dataSynchronizationDetailList
     */
    public $dataSynchronizationDetailList;

    /**
     * @description Specifies whether to query the details of incremental data migration. Valid values:
     *
     *   **true**: yes
     *
     *   **false**: no
     *
     * > Default value: **false**
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The ID of the request.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The error code returned if the call failed.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 30
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description Specifies whether to query the details of full data migration. Valid values:
     *
     *   **true**: yes
     *
     *   **false**: no
     *
     * > Default value: **false**
     *
     * @example 0AE3CD0B-4148-426F-A90E-952467CC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the database to which the migration object in the source instance belongs.
     *
     * @var structureInitializationDetailList
     */
    public $structureInitializationDetailList;

    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description Resource group ID.
     *
     * @example 1
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dataInitializationDetailList' => 'DataInitializationDetailList',
        'dataSynchronizationDetailList' => 'DataSynchronizationDetailList',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'requestId' => 'RequestId',
        'structureInitializationDetailList' => 'StructureInitializationDetailList',
        'success' => 'Success',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInitializationDetailList) {
            $res['DataInitializationDetailList'] = null !== $this->dataInitializationDetailList ? $this->dataInitializationDetailList->toMap() : null;
        }
        if (null !== $this->dataSynchronizationDetailList) {
            $res['DataSynchronizationDetailList'] = null !== $this->dataSynchronizationDetailList ? $this->dataSynchronizationDetailList->toMap() : null;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->structureInitializationDetailList) {
            $res['StructureInitializationDetailList'] = null !== $this->structureInitializationDetailList ? $this->structureInitializationDetailList->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMigrationJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInitializationDetailList'])) {
            $model->dataInitializationDetailList = dataInitializationDetailList::fromMap($map['DataInitializationDetailList']);
        }
        if (isset($map['DataSynchronizationDetailList'])) {
            $model->dataSynchronizationDetailList = dataSynchronizationDetailList::fromMap($map['DataSynchronizationDetailList']);
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StructureInitializationDetailList'])) {
            $model->structureInitializationDetailList = structureInitializationDetailList::fromMap($map['StructureInitializationDetailList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
