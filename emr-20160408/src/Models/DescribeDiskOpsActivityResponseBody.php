<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskOpsActivityResponseBody extends Model
{
    /**
     * @var string
     */
    public $activityState;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $currentActivity;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $needReboot;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'activityState'   => 'ActivityState',
        'clusterType'     => 'ClusterType',
        'currentActivity' => 'CurrentActivity',
        'errorMessage'    => 'ErrorMessage',
        'needReboot'      => 'NeedReboot',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityState) {
            $res['ActivityState'] = $this->activityState;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->currentActivity) {
            $res['CurrentActivity'] = $this->currentActivity;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->needReboot) {
            $res['NeedReboot'] = $this->needReboot;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskOpsActivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityState'])) {
            $model->activityState = $map['ActivityState'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CurrentActivity'])) {
            $model->currentActivity = $map['CurrentActivity'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['NeedReboot'])) {
            $model->needReboot = $map['NeedReboot'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
