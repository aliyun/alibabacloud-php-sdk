<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\inactiveDisks;

use AlibabaCloud\Tea\Model;

class inactiveDisk extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $deviceCategory;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $deviceSize;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'deviceCategory' => 'DeviceCategory',
        'deviceType'     => 'DeviceType',
        'releaseTime'    => 'ReleaseTime',
        'deviceSize'     => 'DeviceSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deviceCategory) {
            $res['DeviceCategory'] = $this->deviceCategory;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->deviceSize) {
            $res['DeviceSize'] = $this->deviceSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inactiveDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeviceCategory'])) {
            $model->deviceCategory = $map['DeviceCategory'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['DeviceSize'])) {
            $model->deviceSize = $map['DeviceSize'];
        }

        return $model;
    }
}
