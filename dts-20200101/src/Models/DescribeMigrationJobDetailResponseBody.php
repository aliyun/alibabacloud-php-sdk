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
     * @description The details of full data migration.
     *
     * @var dataInitializationDetailList
     */
    public $dataInitializationDetailList;

    /**
     * @description The details of incremental data migration.
     *
     * @var dataSynchronizationDetailList
     */
    public $dataSynchronizationDetailList;

    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The maximum number of data migration instances that can be displayed on one page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example 0AE3CD0B-4148-426F-A90E-952467CC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of schema migration.
     *
     * @var structureInitializationDetailList
     */
    public $structureInitializationDetailList;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dataInitializationDetailList'      => 'DataInitializationDetailList',
        'dataSynchronizationDetailList'     => 'DataSynchronizationDetailList',
        'errCode'                           => 'ErrCode',
        'errMessage'                        => 'ErrMessage',
        'pageNumber'                        => 'PageNumber',
        'pageRecordCount'                   => 'PageRecordCount',
        'requestId'                         => 'RequestId',
        'structureInitializationDetailList' => 'StructureInitializationDetailList',
        'success'                           => 'Success',
        'totalRecordCount'                  => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

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
