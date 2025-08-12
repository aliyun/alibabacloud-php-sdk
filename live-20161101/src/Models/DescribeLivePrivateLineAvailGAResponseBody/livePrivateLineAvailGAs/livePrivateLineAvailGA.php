<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAvailGAResponseBody\livePrivateLineAvailGAs;

use AlibabaCloud\Dara\Model;

class livePrivateLineAvailGA extends Model
{
    /**
     * @var string
     */
    public $accelerationArea;

    /**
     * @var string
     */
    public $accelerationType;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bindingStatus;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $videoCenter;
    protected $_name = [
        'accelerationArea' => 'AccelerationArea',
        'accelerationType' => 'AccelerationType',
        'appName' => 'AppName',
        'bindingStatus' => 'BindingStatus',
        'domainName' => 'DomainName',
        'IP' => 'IP',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'streamName' => 'StreamName',
        'uid' => 'Uid',
        'videoCenter' => 'VideoCenter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerationArea) {
            $res['AccelerationArea'] = $this->accelerationArea;
        }

        if (null !== $this->accelerationType) {
            $res['AccelerationType'] = $this->accelerationType;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bindingStatus) {
            $res['BindingStatus'] = $this->bindingStatus;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->videoCenter) {
            $res['VideoCenter'] = $this->videoCenter;
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
        if (isset($map['AccelerationArea'])) {
            $model->accelerationArea = $map['AccelerationArea'];
        }

        if (isset($map['AccelerationType'])) {
            $model->accelerationType = $map['AccelerationType'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BindingStatus'])) {
            $model->bindingStatus = $map['BindingStatus'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['VideoCenter'])) {
            $model->videoCenter = $map['VideoCenter'];
        }

        return $model;
    }
}
