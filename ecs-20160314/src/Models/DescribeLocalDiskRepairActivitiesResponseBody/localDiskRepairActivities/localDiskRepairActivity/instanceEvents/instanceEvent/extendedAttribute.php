<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLocalDiskRepairActivitiesResponseBody\localDiskRepairActivities\localDiskRepairActivity\instanceEvents\instanceEvent;

use AlibabaCloud\Tea\Model;

class extendedAttribute extends Model
{
    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $onlineRepairPolicy;
    protected $_name = [
        'device'             => 'Device',
        'diskId'             => 'DiskId',
        'onlineRepairPolicy' => 'OnlineRepairPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->onlineRepairPolicy) {
            $res['OnlineRepairPolicy'] = $this->onlineRepairPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendedAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['OnlineRepairPolicy'])) {
            $model->onlineRepairPolicy = $map['OnlineRepairPolicy'];
        }

        return $model;
    }
}
