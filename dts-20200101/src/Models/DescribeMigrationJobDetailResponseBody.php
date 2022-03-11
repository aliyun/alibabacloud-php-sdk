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
     * @var dataInitializationDetailList
     */
    public $dataInitializationDetailList;

    /**
     * @var dataSynchronizationDetailList
     */
    public $dataSynchronizationDetailList;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var structureInitializationDetailList
     */
    public $structureInitializationDetailList;

    /**
     * @var string
     */
    public $success;

    /**
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
