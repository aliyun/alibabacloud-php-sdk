<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputSecurityGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class securityGroups extends Model
{
    /**
     * @description The time when the security group was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-12-03T06:56:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The IDs of the inputs associated with the security group.
     *
     * @var string[]
     */
    public $inputIds;

    /**
     * @description The security group name.
     *
     * @example mysg
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the security group.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The security group rules.
     *
     * @var string[]
     */
    public $whitelistRules;
    protected $_name = [
        'createTime' => 'CreateTime',
        'inputIds' => 'InputIds',
        'name' => 'Name',
        'securityGroupId' => 'SecurityGroupId',
        'whitelistRules' => 'WhitelistRules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->inputIds) {
            $res['InputIds'] = $this->inputIds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->whitelistRules) {
            $res['WhitelistRules'] = $this->whitelistRules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InputIds'])) {
            if (!empty($map['InputIds'])) {
                $model->inputIds = $map['InputIds'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['WhitelistRules'])) {
            if (!empty($map['WhitelistRules'])) {
                $model->whitelistRules = $map['WhitelistRules'];
            }
        }

        return $model;
    }
}
