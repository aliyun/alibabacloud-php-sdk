<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiTestResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the DataService Studio API on which the test is performed.
     *
     * @example 2343
     *
     * @var int
     */
    public $apiId;

    /**
     * @description The time that is consumed to complete the test.
     *
     * @example 10
     *
     * @var int
     */
    public $costTime;

    /**
     * @description The time when the test was initiated.
     *
     * @example 1651824913000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The request parameters configured for the test.
     *
     * @example {"name":"test"}
     *
     * @var string
     */
    public $paramMap;

    /**
     * @description The status code returned for the test. If the test is not complete, this parameter is not returned.
     *
     * @example 0
     *
     * @var int
     */
    public $retCode;

    /**
     * @description The result returned for the test.
     *
     * @example {"id":2}
     *
     * @var string
     */
    public $retResult;

    /**
     * @description The status of the test. Valid values: RUNNING and FINISHED.
     *
     * @example FINISHED
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the test.
     *
     * @example 123
     *
     * @var int
     */
    public $testId;
    protected $_name = [
        'apiId'      => 'ApiId',
        'costTime'   => 'CostTime',
        'createTime' => 'CreateTime',
        'paramMap'   => 'ParamMap',
        'retCode'    => 'RetCode',
        'retResult'  => 'RetResult',
        'status'     => 'Status',
        'testId'     => 'TestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->costTime) {
            $res['CostTime'] = $this->costTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->paramMap) {
            $res['ParamMap'] = $this->paramMap;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }
        if (null !== $this->retResult) {
            $res['RetResult'] = $this->retResult;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['CostTime'])) {
            $model->costTime = $map['CostTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ParamMap'])) {
            $model->paramMap = $map['ParamMap'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }
        if (isset($map['RetResult'])) {
            $model->retResult = $map['RetResult'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }

        return $model;
    }
}
