<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class GetQueueSubmissionStatisticInfoRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $fromDatetime;

    /**
     * @var string
     */
    public $toDatetime;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $finalStatus;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'clusterId'       => 'ClusterId',
        'fromDatetime'    => 'FromDatetime',
        'toDatetime'      => 'ToDatetime',
        'applicationType' => 'ApplicationType',
        'finalStatus'     => 'FinalStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->fromDatetime) {
            $res['FromDatetime'] = $this->fromDatetime;
        }
        if (null !== $this->toDatetime) {
            $res['ToDatetime'] = $this->toDatetime;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->finalStatus) {
            $res['FinalStatus'] = $this->finalStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueueSubmissionStatisticInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['FromDatetime'])) {
            $model->fromDatetime = $map['FromDatetime'];
        }
        if (isset($map['ToDatetime'])) {
            $model->toDatetime = $map['ToDatetime'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['FinalStatus'])) {
            $model->finalStatus = $map['FinalStatus'];
        }

        return $model;
    }
}
