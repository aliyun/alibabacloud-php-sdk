<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetServiceConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $liveRecordAll;

    /**
     * @var int
     */
    public $liveRecordLayout;

    /**
     * @var int
     */
    public $liveRecordMaxClient;

    /**
     * @var bool
     */
    public $liveRecordEveryOne;

    /**
     * @var string
     */
    public $liveRecordTaskProfile;

    /**
     * @var int
     */
    public $liveRecordVideoResolution;

    /**
     * @var int
     */
    public $taskItemQueueSize;

    /**
     * @var int
     */
    public $clientQueueSize;
    protected $_name = [
        'liveRecordAll'             => 'LiveRecordAll',
        'liveRecordLayout'          => 'LiveRecordLayout',
        'liveRecordMaxClient'       => 'LiveRecordMaxClient',
        'liveRecordEveryOne'        => 'LiveRecordEveryOne',
        'liveRecordTaskProfile'     => 'LiveRecordTaskProfile',
        'liveRecordVideoResolution' => 'LiveRecordVideoResolution',
        'taskItemQueueSize'         => 'TaskItemQueueSize',
        'clientQueueSize'           => 'ClientQueueSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRecordAll) {
            $res['LiveRecordAll'] = $this->liveRecordAll;
        }
        if (null !== $this->liveRecordLayout) {
            $res['LiveRecordLayout'] = $this->liveRecordLayout;
        }
        if (null !== $this->liveRecordMaxClient) {
            $res['LiveRecordMaxClient'] = $this->liveRecordMaxClient;
        }
        if (null !== $this->liveRecordEveryOne) {
            $res['LiveRecordEveryOne'] = $this->liveRecordEveryOne;
        }
        if (null !== $this->liveRecordTaskProfile) {
            $res['LiveRecordTaskProfile'] = $this->liveRecordTaskProfile;
        }
        if (null !== $this->liveRecordVideoResolution) {
            $res['LiveRecordVideoResolution'] = $this->liveRecordVideoResolution;
        }
        if (null !== $this->taskItemQueueSize) {
            $res['TaskItemQueueSize'] = $this->taskItemQueueSize;
        }
        if (null !== $this->clientQueueSize) {
            $res['ClientQueueSize'] = $this->clientQueueSize;
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
        if (isset($map['LiveRecordAll'])) {
            $model->liveRecordAll = $map['LiveRecordAll'];
        }
        if (isset($map['LiveRecordLayout'])) {
            $model->liveRecordLayout = $map['LiveRecordLayout'];
        }
        if (isset($map['LiveRecordMaxClient'])) {
            $model->liveRecordMaxClient = $map['LiveRecordMaxClient'];
        }
        if (isset($map['LiveRecordEveryOne'])) {
            $model->liveRecordEveryOne = $map['LiveRecordEveryOne'];
        }
        if (isset($map['LiveRecordTaskProfile'])) {
            $model->liveRecordTaskProfile = $map['LiveRecordTaskProfile'];
        }
        if (isset($map['LiveRecordVideoResolution'])) {
            $model->liveRecordVideoResolution = $map['LiveRecordVideoResolution'];
        }
        if (isset($map['TaskItemQueueSize'])) {
            $model->taskItemQueueSize = $map['TaskItemQueueSize'];
        }
        if (isset($map['ClientQueueSize'])) {
            $model->clientQueueSize = $map['ClientQueueSize'];
        }

        return $model;
    }
}
