<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class QueryTrafficControlTaskDeployResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $deployMessage;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $draftMessage;

    /**
     * @var string
     */
    public $draftStatus;

    /**
     * @var string
     */
    public $prepareMessage;

    /**
     * @var string
     */
    public $prepareStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startMessage;

    /**
     * @var string
     */
    public $startStatus;

    /**
     * @var string
     */
    public $trafficControlTaskId;
    protected $_name = [
        'deployMessage' => 'DeployMessage',
        'deployStatus' => 'DeployStatus',
        'draftMessage' => 'DraftMessage',
        'draftStatus' => 'DraftStatus',
        'prepareMessage' => 'PrepareMessage',
        'prepareStatus' => 'PrepareStatus',
        'requestId' => 'RequestId',
        'startMessage' => 'StartMessage',
        'startStatus' => 'StartStatus',
        'trafficControlTaskId' => 'TrafficControlTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployMessage) {
            $res['DeployMessage'] = $this->deployMessage;
        }

        if (null !== $this->deployStatus) {
            $res['DeployStatus'] = $this->deployStatus;
        }

        if (null !== $this->draftMessage) {
            $res['DraftMessage'] = $this->draftMessage;
        }

        if (null !== $this->draftStatus) {
            $res['DraftStatus'] = $this->draftStatus;
        }

        if (null !== $this->prepareMessage) {
            $res['PrepareMessage'] = $this->prepareMessage;
        }

        if (null !== $this->prepareStatus) {
            $res['PrepareStatus'] = $this->prepareStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startMessage) {
            $res['StartMessage'] = $this->startMessage;
        }

        if (null !== $this->startStatus) {
            $res['StartStatus'] = $this->startStatus;
        }

        if (null !== $this->trafficControlTaskId) {
            $res['TrafficControlTaskId'] = $this->trafficControlTaskId;
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
        if (isset($map['DeployMessage'])) {
            $model->deployMessage = $map['DeployMessage'];
        }

        if (isset($map['DeployStatus'])) {
            $model->deployStatus = $map['DeployStatus'];
        }

        if (isset($map['DraftMessage'])) {
            $model->draftMessage = $map['DraftMessage'];
        }

        if (isset($map['DraftStatus'])) {
            $model->draftStatus = $map['DraftStatus'];
        }

        if (isset($map['PrepareMessage'])) {
            $model->prepareMessage = $map['PrepareMessage'];
        }

        if (isset($map['PrepareStatus'])) {
            $model->prepareStatus = $map['PrepareStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartMessage'])) {
            $model->startMessage = $map['StartMessage'];
        }

        if (isset($map['StartStatus'])) {
            $model->startStatus = $map['StartStatus'];
        }

        if (isset($map['TrafficControlTaskId'])) {
            $model->trafficControlTaskId = $map['TrafficControlTaskId'];
        }

        return $model;
    }
}
