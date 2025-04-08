<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiSparkApplicationsResponseBody;

use AlibabaCloud\Dara\Model;

class applications extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var float
     */
    public $cuHours;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $mbSeconds;

    /**
     * @var string
     */
    public $resourceQueueId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $vcoreSeconds;

    /**
     * @var string
     */
    public $webUI;
    protected $_name = [
        'applicationId' => 'applicationId',
        'applicationName' => 'applicationName',
        'cuHours' => 'cuHours',
        'endTime' => 'endTime',
        'mbSeconds' => 'mbSeconds',
        'resourceQueueId' => 'resourceQueueId',
        'startTime' => 'startTime',
        'state' => 'state',
        'vcoreSeconds' => 'vcoreSeconds',
        'webUI' => 'webUI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['applicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['applicationName'] = $this->applicationName;
        }

        if (null !== $this->cuHours) {
            $res['cuHours'] = $this->cuHours;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->mbSeconds) {
            $res['mbSeconds'] = $this->mbSeconds;
        }

        if (null !== $this->resourceQueueId) {
            $res['resourceQueueId'] = $this->resourceQueueId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->vcoreSeconds) {
            $res['vcoreSeconds'] = $this->vcoreSeconds;
        }

        if (null !== $this->webUI) {
            $res['webUI'] = $this->webUI;
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
        if (isset($map['applicationId'])) {
            $model->applicationId = $map['applicationId'];
        }

        if (isset($map['applicationName'])) {
            $model->applicationName = $map['applicationName'];
        }

        if (isset($map['cuHours'])) {
            $model->cuHours = $map['cuHours'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['mbSeconds'])) {
            $model->mbSeconds = $map['mbSeconds'];
        }

        if (isset($map['resourceQueueId'])) {
            $model->resourceQueueId = $map['resourceQueueId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['vcoreSeconds'])) {
            $model->vcoreSeconds = $map['vcoreSeconds'];
        }

        if (isset($map['webUI'])) {
            $model->webUI = $map['webUI'];
        }

        return $model;
    }
}
