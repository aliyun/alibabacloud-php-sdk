<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ConfigInstanceSecurityGroupsRequest extends Model
{
    /**
     * @description An array that consists of the IDs of authorized security groups.
     *
     * @example sg-bp14u00sh39jvw5****
     *
     * @var string[]
     */
    public $authorizedSecurityGroups;

    /**
     * @description The ID of the bastion host.
     *
     * > You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-78v1gh****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The region ID of the bastion host.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'authorizedSecurityGroups' => 'AuthorizedSecurityGroups',
        'instanceId'               => 'InstanceId',
        'lang'                     => 'Lang',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedSecurityGroups) {
            $res['AuthorizedSecurityGroups'] = $this->authorizedSecurityGroups;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigInstanceSecurityGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedSecurityGroups'])) {
            if (!empty($map['AuthorizedSecurityGroups'])) {
                $model->authorizedSecurityGroups = $map['AuthorizedSecurityGroups'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
