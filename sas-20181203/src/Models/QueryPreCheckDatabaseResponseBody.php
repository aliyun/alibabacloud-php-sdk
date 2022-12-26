<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class QueryPreCheckDatabaseResponseBody extends Model
{
    /**
     * @example 1657524396
     *
     * @var int
     */
    public $completedTime;

    /**
     * @example 1660448660
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example completed
     *
     * @var string
     */
    public $description;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example CE500770-42D3-442E-9DDD-156E0F9F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example [
     * {
     * "instanceId": "i-wz91if83t97xgtn2****",
     * ]
     * @var string
     */
    public $result;

    /**
     * @example 1671084106
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'completedTime' => 'CompletedTime',
        'createdTime'   => 'CreatedTime',
        'description'   => 'Description',
        'progress'      => 'Progress',
        'requestId'     => 'RequestId',
        'result'        => 'Result',
        'updatedTime'   => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedTime) {
            $res['CompletedTime'] = $this->completedTime;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPreCheckDatabaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletedTime'])) {
            $model->completedTime = $map['CompletedTime'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
