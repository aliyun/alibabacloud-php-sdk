<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class SetInstanceModeOnDemandRequest extends Model
{
    /**
     * @description SetInstanceModeOnDemand
     *
     * @example ddosbgp-cn-z2q1qzxb****
     *
     * @var string[]
     */
    public $instanceIdList;

    /**
     * @description SetInstanceModeOnDemand
     *
     * @example netflow-auto
     *
     * @var string
     */
    public $mode;

    /**
     * @description WB269094
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceIdList' => 'InstanceIdList',
        'mode'           => 'Mode',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetInstanceModeOnDemandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
