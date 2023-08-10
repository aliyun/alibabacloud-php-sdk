<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetRootOrganizationalUnitResponseBody;

use AlibabaCloud\Tea\Model;

class organizationalUnit extends Model
{
    /**
     * @description The time when the organizational unit was created. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the organizational unit.
     *
     * @example Test organizational unit
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the instance.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the organizational unit.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @description The name of the organization.
     *
     * @example name001
     *
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @description The time when the organizational unit was last updated. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'instanceId'             => 'InstanceId',
        'organizationalUnitId'   => 'OrganizationalUnitId',
        'organizationalUnitName' => 'OrganizationalUnitName',
        'updateTime'             => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }
        if (null !== $this->organizationalUnitName) {
            $res['OrganizationalUnitName'] = $this->organizationalUnitName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organizationalUnit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }
        if (isset($map['OrganizationalUnitName'])) {
            $model->organizationalUnitName = $map['OrganizationalUnitName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
