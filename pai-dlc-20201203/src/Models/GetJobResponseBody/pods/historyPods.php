<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\pods;

use AlibabaCloud\Tea\Model;

class historyPods extends Model
{
    /**
     * @description The time when the node was created (UTC).
     *
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description The end time of the node (UTC).
     *
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @description The start time of the node (UTC).
     *
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtStartTime;

    /**
     * @description The IP address of the node.
     *
     * @example 10.0.1.3
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the node.
     *
     * @example Worker
     *
     * @var string
     */
    public $podId;

    /**
     * @description The UID of the node.
     *
     * @example fe846462-af2c-4521-bd6f-96787a57591d
     *
     * @var string
     */
    public $podUid;

    /**
     * @description The resource type of the node.
     *
     * @example Normal
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the node.
     *
     * @example Failed
     *
     * @var string
     */
    public $status;

    /**
     * @description The sub-status of the node, such as its preemption status. Valid values:
     *
     *   Normal
     *   Evicted
     *
     * @example Normal
     *
     * @var string
     */
    public $subStatus;

    /**
     * @description The type of the node.
     *
     * @example Worker
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtFinishTime' => 'GmtFinishTime',
        'gmtStartTime' => 'GmtStartTime',
        'ip' => 'Ip',
        'podId' => 'PodId',
        'podUid' => 'PodUid',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'subStatus' => 'SubStatus',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }
        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }
        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyPods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }
        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }
        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
