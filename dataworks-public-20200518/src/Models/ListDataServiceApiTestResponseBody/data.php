<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiTestResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var int
     */
    public $costTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $paramMap;

    /**
     * @var int
     */
    public $retCode;

    /**
     * @var string
     */
    public $retResult;

    /**
     * @var string
     */
    public $status;

    /**
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
