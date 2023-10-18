<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\physicalConnectionList;

use AlibabaCloud\Tea\Model;

class physicalConnectionList extends Model
{
    /**
     * @example pc-j5e5qqo616p81ncspbll1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionNo'   => 'RegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
