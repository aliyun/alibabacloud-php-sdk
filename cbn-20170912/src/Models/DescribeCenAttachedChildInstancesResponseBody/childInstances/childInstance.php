<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponseBody\childInstances;

use AlibabaCloud\Tea\Model;

class childInstance extends Model
{
    /**
     * @var string
     */
    public $childInstanceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @var string
     */
    public $childInstanceId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $childInstanceAttachTime;
    protected $_name = [
        'childInstanceType'       => 'ChildInstanceType',
        'status'                  => 'Status',
        'childInstanceRegionId'   => 'ChildInstanceRegionId',
        'childInstanceOwnerId'    => 'ChildInstanceOwnerId',
        'childInstanceId'         => 'ChildInstanceId',
        'cenId'                   => 'CenId',
        'childInstanceAttachTime' => 'ChildInstanceAttachTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }
        if (null !== $this->childInstanceOwnerId) {
            $res['ChildInstanceOwnerId'] = $this->childInstanceOwnerId;
        }
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->childInstanceAttachTime) {
            $res['ChildInstanceAttachTime'] = $this->childInstanceAttachTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }
        if (isset($map['ChildInstanceOwnerId'])) {
            $model->childInstanceOwnerId = $map['ChildInstanceOwnerId'];
        }
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ChildInstanceAttachTime'])) {
            $model->childInstanceAttachTime = $map['ChildInstanceAttachTime'];
        }

        return $model;
    }
}
