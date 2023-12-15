<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractJobsByNameResponseBody\result;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userBid;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'finishedTime' => 'FinishedTime',
        'jobId'        => 'JobId',
        'name'         => 'Name',
        'sourceType'   => 'SourceType',
        'status'       => 'Status',
        'userBid'      => 'UserBid',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userBid) {
            $res['UserBid'] = $this->userBid;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserBid'])) {
            $model->userBid = $map['UserBid'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
