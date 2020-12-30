<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationResponseBody\clusterOperationList;

use AlibabaCloud\Tea\Model;

class clusterOperation extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $operationName;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $percentage;
    protected $_name = [
        'status'        => 'Status',
        'startTime'     => 'StartTime',
        'comment'       => 'Comment',
        'operationName' => 'OperationName',
        'operationId'   => 'OperationId',
        'duration'      => 'Duration',
        'percentage'    => 'Percentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        return $model;
    }
}
