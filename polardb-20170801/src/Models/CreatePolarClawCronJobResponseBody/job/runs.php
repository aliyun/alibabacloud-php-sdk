<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawCronJobResponseBody\job;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreatePolarClawCronJobResponseBody\job\runs\usage;

class runs extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var bool
     */
    public $delivered;

    /**
     * @var string
     */
    public $deliveryStatus;

    /**
     * @var int
     */
    public $durationMs;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $nextRunAtMs;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var int
     */
    public $runAtMs;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var int
     */
    public $ts;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'action' => 'Action',
        'delivered' => 'Delivered',
        'deliveryStatus' => 'DeliveryStatus',
        'durationMs' => 'DurationMs',
        'jobId' => 'JobId',
        'jobName' => 'JobName',
        'model' => 'Model',
        'nextRunAtMs' => 'NextRunAtMs',
        'provider' => 'Provider',
        'runAtMs' => 'RunAtMs',
        'sessionId' => 'SessionId',
        'status' => 'Status',
        'summary' => 'Summary',
        'ts' => 'Ts',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->delivered) {
            $res['Delivered'] = $this->delivered;
        }

        if (null !== $this->deliveryStatus) {
            $res['DeliveryStatus'] = $this->deliveryStatus;
        }

        if (null !== $this->durationMs) {
            $res['DurationMs'] = $this->durationMs;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->nextRunAtMs) {
            $res['NextRunAtMs'] = $this->nextRunAtMs;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->runAtMs) {
            $res['RunAtMs'] = $this->runAtMs;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Delivered'])) {
            $model->delivered = $map['Delivered'];
        }

        if (isset($map['DeliveryStatus'])) {
            $model->deliveryStatus = $map['DeliveryStatus'];
        }

        if (isset($map['DurationMs'])) {
            $model->durationMs = $map['DurationMs'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NextRunAtMs'])) {
            $model->nextRunAtMs = $map['NextRunAtMs'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['RunAtMs'])) {
            $model->runAtMs = $map['RunAtMs'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        return $model;
    }
}
