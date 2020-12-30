<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class SetInstanceModeOnDemandRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $instanceIdList;
    protected $_name = [
        'sourceIp'       => 'SourceIp',
        'mode'           => 'Mode',
        'regionId'       => 'RegionId',
        'instanceIdList' => 'InstanceIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceIdList) {
            $res['InstanceIdList'] = $this->instanceIdList;
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = $map['InstanceIdList'];
            }
        }

        return $model;
    }
}
