<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029\Models;

use AlibabaCloud\Tea\Model;

class ConfigInstanceWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string[]
     */
    public $whiteList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'ipVersion'  => 'IpVersion',
        'whiteList'  => 'WhiteList',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigInstanceWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }

        return $model;
    }
}
