<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetOrganizationalUnitResponseBody;

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
     * @description Indicates whether the node is a leaf node.
     *
     * @example false
     *
     * @var bool
     */
    public $leaf;

    /**
     * @description The external ID of the organizational unit. The external ID can be used by external data to map the data of the organizational unit in IDaaS EIAM. By default, the external ID is the organizational unit ID.
     *
     * For organizational units with the same source type and source ID, each organizational unit has a unique external ID.
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $organizationalUnitExternalId;

    /**
     * @description The ID of the organizational unit.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @description 组织名称。
     *
     * @example test_organizationalUnit_name
     *
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @description The source ID of the organizational unit.
     *
     * If the organizational unit was created in IDaaS, its source ID is the ID of the IDaaS instance. If the organizational unit was imported, its source ID is the enterprise ID in the source. For example, if the organizational unit was imported from DingTalk, its source ID is the corpId value of the enterprise in DingTalk.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $organizationalUnitSourceId;

    /**
     * @description The source type of the organizational unit. Valid values:
     *
     *   build_in: The organizational unit was created in IDaaS.
     *   ding_talk: The organizational unit was imported from DingTalk.
     *   ad: The organizational unit was imported from Microsoft Active Directory (AD).
     *   ldap: The organizational unit was imported from a Lightweight Directory Access Protocol (LDAP) service.
     *
     * @example build_in
     *
     * @var string
     */
    public $organizationalUnitSourceType;

    /**
     * @description The ID of the parent organizational unit.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The time when the organizational unit was last updated. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652085686179
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'                   => 'CreateTime',
        'description'                  => 'Description',
        'instanceId'                   => 'InstanceId',
        'leaf'                         => 'Leaf',
        'organizationalUnitExternalId' => 'OrganizationalUnitExternalId',
        'organizationalUnitId'         => 'OrganizationalUnitId',
        'organizationalUnitName'       => 'OrganizationalUnitName',
        'organizationalUnitSourceId'   => 'OrganizationalUnitSourceId',
        'organizationalUnitSourceType' => 'OrganizationalUnitSourceType',
        'parentId'                     => 'ParentId',
        'updateTime'                   => 'UpdateTime',
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
        if (null !== $this->leaf) {
            $res['Leaf'] = $this->leaf;
        }
        if (null !== $this->organizationalUnitExternalId) {
            $res['OrganizationalUnitExternalId'] = $this->organizationalUnitExternalId;
        }
        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }
        if (null !== $this->organizationalUnitName) {
            $res['OrganizationalUnitName'] = $this->organizationalUnitName;
        }
        if (null !== $this->organizationalUnitSourceId) {
            $res['OrganizationalUnitSourceId'] = $this->organizationalUnitSourceId;
        }
        if (null !== $this->organizationalUnitSourceType) {
            $res['OrganizationalUnitSourceType'] = $this->organizationalUnitSourceType;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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
        if (isset($map['Leaf'])) {
            $model->leaf = $map['Leaf'];
        }
        if (isset($map['OrganizationalUnitExternalId'])) {
            $model->organizationalUnitExternalId = $map['OrganizationalUnitExternalId'];
        }
        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }
        if (isset($map['OrganizationalUnitName'])) {
            $model->organizationalUnitName = $map['OrganizationalUnitName'];
        }
        if (isset($map['OrganizationalUnitSourceId'])) {
            $model->organizationalUnitSourceId = $map['OrganizationalUnitSourceId'];
        }
        if (isset($map['OrganizationalUnitSourceType'])) {
            $model->organizationalUnitSourceType = $map['OrganizationalUnitSourceType'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
