<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class ListInstanceInspectionRunsRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reportStatus;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'endTime' => 'endTime',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'regionId' => 'regionId',
        'reportStatus' => 'reportStatus',
        'result' => 'result',
        'sortBy' => 'sortBy',
        'startTime' => 'startTime',
        'status' => 'status',
        'templateCode' => 'templateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->reportStatus) {
            $res['reportStatus'] = $this->reportStatus;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->sortBy) {
            $res['sortBy'] = $this->sortBy;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['reportStatus'])) {
            $model->reportStatus = $map['reportStatus'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['sortBy'])) {
            $model->sortBy = $map['sortBy'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        return $model;
    }
}
