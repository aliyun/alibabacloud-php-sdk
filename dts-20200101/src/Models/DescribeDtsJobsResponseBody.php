<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList;

class DescribeDtsJobsResponseBody extends Model
{
    /**
     * @var dtsJobList[]
     */
    public $dtsJobList;

    /**
     * @var string
     */
    public $dynamicCode;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var etlDemoList[]
     */
    public $etlDemoList;

    /**
     * @var int
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
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dtsJobList' => 'DtsJobList',
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'etlDemoList' => 'EtlDemoList',
        'httpStatusCode' => 'HttpStatusCode',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->dtsJobList)) {
            Model::validateArray($this->dtsJobList);
        }
        if (\is_array($this->etlDemoList)) {
            Model::validateArray($this->etlDemoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dtsJobList) {
            if (\is_array($this->dtsJobList)) {
                $res['DtsJobList'] = [];
                $n1 = 0;
                foreach ($this->dtsJobList as $item1) {
                    $res['DtsJobList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->etlDemoList) {
            if (\is_array($this->etlDemoList)) {
                $res['EtlDemoList'] = [];
                $n1 = 0;
                foreach ($this->etlDemoList as $item1) {
                    $res['EtlDemoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DtsJobList'])) {
            if (!empty($map['DtsJobList'])) {
                $model->dtsJobList = [];
                $n1 = 0;
                foreach ($map['DtsJobList'] as $item1) {
                    $model->dtsJobList[$n1] = dtsJobList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['EtlDemoList'])) {
            if (!empty($map['EtlDemoList'])) {
                $model->etlDemoList = [];
                $n1 = 0;
                foreach ($map['EtlDemoList'] as $item1) {
                    $model->etlDemoList[$n1] = etlDemoList::fromMap($item1);
                    ++$n1;
                }
            }
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
