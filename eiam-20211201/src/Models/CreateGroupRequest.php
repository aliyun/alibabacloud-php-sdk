<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model
{
    /**
     * @description The description of the group. The value can be up to 256 characters in length.
     *
     * @example this is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @description The external ID of the group, which can be used to associate the group with an external system. By default, the external ID is the group ID. The value can be up to 64 characters in length.
     *
     * @example group_d6sbsuumeta4h66ec3il7yxxxx
     *
     * @var string
     */
    public $groupExternalId;

    /**
     * @description The name of the group. The name can be up to 64 characters in length.
     *
     * @example name_test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'description'     => 'Description',
        'groupExternalId' => 'GroupExternalId',
        'groupName'       => 'GroupName',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupExternalId) {
            $res['GroupExternalId'] = $this->groupExternalId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupExternalId'])) {
            $model->groupExternalId = $map['GroupExternalId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
