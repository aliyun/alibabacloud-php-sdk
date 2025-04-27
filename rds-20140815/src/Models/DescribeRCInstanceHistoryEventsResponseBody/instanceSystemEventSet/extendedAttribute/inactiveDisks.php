<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceHistoryEventsResponseBody\instanceSystemEventSet\extendedAttribute;

use AlibabaCloud\Dara\Model;

class inactiveDisks extends Model
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
    public $deviceSize;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $releaseTime;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'deviceCategory' => 'DeviceCategory',
        'deviceSize' => 'DeviceSize',
        'deviceType' => 'DeviceType',
        'releaseTime' => 'ReleaseTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->deviceCategory) {
            $res['DeviceCategory'] = $this->deviceCategory;
        }

        if (null !== $this->deviceSize) {
            $res['DeviceSize'] = $this->deviceSize;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DeviceCategory'])) {
            $model->deviceCategory = $map['DeviceCategory'];
        }

        if (isset($map['DeviceSize'])) {
            $model->deviceSize = $map['DeviceSize'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        return $model;
    }
}
