<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesTrafficPackagesRequest extends Model
{
    /**
     * @var string
     */
    public $acsProduct;

    /**
     * @description The IDs of the simple application servers. The value can be a JSON array that consists of up to 100 simple application server IDs. Separate multiple server IDs with commas (,).
     *
     * @example ["2ad1ae67295445f598017499dc******","2ad1ae67295445f598017499dc******"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The region ID of the simple application servers. You can call the [ListRegions](~~189315~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acsProduct'  => 'AcsProduct',
        'instanceIds' => 'InstanceIds',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsProduct) {
            $res['AcsProduct'] = $this->acsProduct;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesTrafficPackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsProduct'])) {
            $model->acsProduct = $map['AcsProduct'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
