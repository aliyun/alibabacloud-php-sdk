<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceConfigurationRequest extends Model
{
    /**
     * @var int
     */
    public $taskItemQueueSize;

    /**
     * @var int
     */
    public $clientQueueSize;

    /**
     * @var bool
     */
    public $liveRecordEveryOne;

    /**
     * @var bool
     */
    public $liveRecordAll;

    /**
     * @var int
     */
    public $liveRecordLayout;

    /**
     * @var string
     */
    public $liveRecordTaskProfile;

    /**
     * @var int
     */
    public $liveRecordMaxClient;

    /**
     * @var int
     */
    public $liveRecordVideoResolution;
    protected $_name = [
        'taskItemQueueSize'         => 'TaskItemQueueSize',
        'clientQueueSize'           => 'ClientQueueSize',
        'liveRecordEveryOne'        => 'LiveRecordEveryOne',
        'liveRecordAll'             => 'LiveRecordAll',
        'liveRecordLayout'          => 'LiveRecordLayout',
        'liveRecordTaskProfile'     => 'LiveRecordTaskProfile',
        'liveRecordMaxClient'       => 'LiveRecordMaxClient',
        'liveRecordVideoResolution' => 'LiveRecordVideoResolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskItemQueueSize) {
            $res['TaskItemQueueSize'] = $this->taskItemQueueSize;
        }
        if (null !== $this->clientQueueSize) {
            $res['ClientQueueSize'] = $this->clientQueueSize;
        }
        if (null !== $this->liveRecordEveryOne) {
            $res['LiveRecordEveryOne'] = $this->liveRecordEveryOne;
        }
        if (null !== $this->liveRecordAll) {
            $res['LiveRecordAll'] = $this->liveRecordAll;
        }
        if (null !== $this->liveRecordLayout) {
            $res['LiveRecordLayout'] = $this->liveRecordLayout;
        }
        if (null !== $this->liveRecordTaskProfile) {
            $res['LiveRecordTaskProfile'] = $this->liveRecordTaskProfile;
        }
        if (null !== $this->liveRecordMaxClient) {
            $res['LiveRecordMaxClient'] = $this->liveRecordMaxClient;
        }
        if (null !== $this->liveRecordVideoResolution) {
            $res['LiveRecordVideoResolution'] = $this->liveRecordVideoResolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskItemQueueSize'])) {
            $model->taskItemQueueSize = $map['TaskItemQueueSize'];
        }
        if (isset($map['ClientQueueSize'])) {
            $model->clientQueueSize = $map['ClientQueueSize'];
        }
        if (isset($map['LiveRecordEveryOne'])) {
            $model->liveRecordEveryOne = $map['LiveRecordEveryOne'];
        }
        if (isset($map['LiveRecordAll'])) {
            $model->liveRecordAll = $map['LiveRecordAll'];
        }
        if (isset($map['LiveRecordLayout'])) {
            $model->liveRecordLayout = $map['LiveRecordLayout'];
        }
        if (isset($map['LiveRecordTaskProfile'])) {
            $model->liveRecordTaskProfile = $map['LiveRecordTaskProfile'];
        }
        if (isset($map['LiveRecordMaxClient'])) {
            $model->liveRecordMaxClient = $map['LiveRecordMaxClient'];
        }
        if (isset($map['LiveRecordVideoResolution'])) {
            $model->liveRecordVideoResolution = $map['LiveRecordVideoResolution'];
        }

        return $model;
    }
}
