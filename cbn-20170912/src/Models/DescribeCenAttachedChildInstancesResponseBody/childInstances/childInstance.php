<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponseBody\childInstances;

use AlibabaCloud\Dara\Model;

class childInstance extends Model
{
    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $childInstanceAttachTime;

    /**
     * @var string
     */
    public $childInstanceId;

    /**
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @var string
     */
    public $childInstanceType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cenId' => 'CenId',
        'childInstanceAttachTime' => 'ChildInstanceAttachTime',
        'childInstanceId' => 'ChildInstanceId',
        'childInstanceOwnerId' => 'ChildInstanceOwnerId',
        'childInstanceRegionId' => 'ChildInstanceRegionId',
        'childInstanceType' => 'ChildInstanceType',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->childInstanceAttachTime) {
            $res['ChildInstanceAttachTime'] = $this->childInstanceAttachTime;
        }

        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }

        if (null !== $this->childInstanceOwnerId) {
            $res['ChildInstanceOwnerId'] = $this->childInstanceOwnerId;
        }

        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }

        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['ChildInstanceAttachTime'])) {
            $model->childInstanceAttachTime = $map['ChildInstanceAttachTime'];
        }

        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }

        if (isset($map['ChildInstanceOwnerId'])) {
            $model->childInstanceOwnerId = $map['ChildInstanceOwnerId'];
        }

        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }

        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
