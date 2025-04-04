<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceWhiteListRequest\whiteListPolicies;
use AlibabaCloud\Tea\Model;

class ConfigInstanceWhiteListRequest extends Model
{
    /**
     * @description The ID of the bastion host for which you want to configure a whitelist of public IP addresses.
     *
     * > You can call the [DescribeInstances](https://help.aliyun.com/document_detail/153281.html) operation to query the bastion host ID.
     *
     * This parameter is required.
     *
     * @example bastionhost-cn-78v1gh****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IP address whitelist that you want to configure.
     *
     * @example 10.162.XX.XX
     *
     * @var string[]
     */
    public $whiteList;

    /**
     * @var whiteListPolicies[]
     */
    public $whiteListPolicies;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'whiteList' => 'WhiteList',
        'whiteListPolicies' => 'WhiteListPolicies',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }
        if (null !== $this->whiteListPolicies) {
            $res['WhiteListPolicies'] = [];
            if (null !== $this->whiteListPolicies && \is_array($this->whiteListPolicies)) {
                $n = 0;
                foreach ($this->whiteListPolicies as $item) {
                    $res['WhiteListPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = $map['WhiteList'];
            }
        }
        if (isset($map['WhiteListPolicies'])) {
            if (!empty($map['WhiteListPolicies'])) {
                $model->whiteListPolicies = [];
                $n = 0;
                foreach ($map['WhiteListPolicies'] as $item) {
                    $model->whiteListPolicies[$n++] = null !== $item ? whiteListPolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
