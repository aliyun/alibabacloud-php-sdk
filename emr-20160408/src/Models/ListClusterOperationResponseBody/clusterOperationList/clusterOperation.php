<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationResponseBody\clusterOperationList;

use AlibabaCloud\Tea\Model;

class clusterOperation extends Model
{
    /**
     * @example Create cluster
     *
     * @var string
     */
    public $comment;

    /**
     * @example 303
     *
     * @var string
     */
    public $duration;

    /**
     * @example 41027
     *
     * @var string
     */
    public $operationId;

    /**
     * @example CREATE
     *
     * @var string
     */
    public $operationName;

    /**
     * @example 100
     *
     * @var string
     */
    public $percentage;

    /**
     * @example 1543312720000
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'comment'       => 'Comment',
        'duration'      => 'Duration',
        'operationId'   => 'OperationId',
        'operationName' => 'OperationName',
        'percentage'    => 'Percentage',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterOperation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
