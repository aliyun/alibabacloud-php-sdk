<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponseBody\dedicatedClusterStatusList;

class ListDedicatedClusterResponseBody extends Model
{
    /**
     * @var dedicatedClusterStatusList
     */
    public $dedicatedClusterStatusList;
    /**
     * @var string
     */
    public $errCode;
    /**
     * @var string
     */
    public $errMessage;
    /**
     * @var string
     */
    public $httpStatusCode;
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
     * @var string
     */
    public $success;
    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dedicatedClusterStatusList' => 'DedicatedClusterStatusList',
        'errCode'                    => 'ErrCode',
        'errMessage'                 => 'ErrMessage',
        'httpStatusCode'             => 'HttpStatusCode',
        'pageNumber'                 => 'PageNumber',
        'pageRecordCount'            => 'PageRecordCount',
        'requestId'                  => 'RequestId',
        'success'                    => 'Success',
        'totalRecordCount'           => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (null !== $this->dedicatedClusterStatusList) {
            $this->dedicatedClusterStatusList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedClusterStatusList) {
            $res['DedicatedClusterStatusList'] = null !== $this->dedicatedClusterStatusList ? $this->dedicatedClusterStatusList->toArray($noStream) : $this->dedicatedClusterStatusList;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedClusterStatusList'])) {
            $model->dedicatedClusterStatusList = dedicatedClusterStatusList::fromMap($map['DedicatedClusterStatusList']);
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
