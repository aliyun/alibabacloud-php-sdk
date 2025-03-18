<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListOrganizationalUnitsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the organizational unit was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652083425923
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the organizational unit.
     *
     * @example test organizational unit
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The external ID of the organizational unit. The external ID can be used to map external data to the data of the organizational unit in EIAM of Identity as a Service (IDaaS). By default, the external ID is the organizational unit ID.
     *
     * Note: For organizational units with the same source type and source ID, each organizational unit has a unique external ID.
     *
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
     * @description The name of the organizational unit.
     *
     * @example name001
     *
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @description The source ID of the organizational unit.
     *
     * If the organizational unit was created in IDaaS, its source ID is the ID of the IDaaS instance. If the organizational unit was imported, its source ID is the enterprise ID in the source. For example, if the organizational unit was imported from DingTalk, its source ID is the corpId value of the enterprise in DingTalk.
     *
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
     * @description The time when the organizational unit was last updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1652083425923
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'instanceId' => 'instanceId',
        'organizationalUnitExternalId' => 'organizationalUnitExternalId',
        'organizationalUnitId' => 'organizationalUnitId',
        'organizationalUnitName' => 'organizationalUnitName',
        'organizationalUnitSourceId' => 'organizationalUnitSourceId',
        'organizationalUnitSourceType' => 'organizationalUnitSourceType',
        'parentId' => 'parentId',
        'updateTime' => 'updateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->organizationalUnitExternalId) {
            $res['organizationalUnitExternalId'] = $this->organizationalUnitExternalId;
        }
        if (null !== $this->organizationalUnitId) {
            $res['organizationalUnitId'] = $this->organizationalUnitId;
        }
        if (null !== $this->organizationalUnitName) {
            $res['organizationalUnitName'] = $this->organizationalUnitName;
        }
        if (null !== $this->organizationalUnitSourceId) {
            $res['organizationalUnitSourceId'] = $this->organizationalUnitSourceId;
        }
        if (null !== $this->organizationalUnitSourceType) {
            $res['organizationalUnitSourceType'] = $this->organizationalUnitSourceType;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['organizationalUnitExternalId'])) {
            $model->organizationalUnitExternalId = $map['organizationalUnitExternalId'];
        }
        if (isset($map['organizationalUnitId'])) {
            $model->organizationalUnitId = $map['organizationalUnitId'];
        }
        if (isset($map['organizationalUnitName'])) {
            $model->organizationalUnitName = $map['organizationalUnitName'];
        }
        if (isset($map['organizationalUnitSourceId'])) {
            $model->organizationalUnitSourceId = $map['organizationalUnitSourceId'];
        }
        if (isset($map['organizationalUnitSourceType'])) {
            $model->organizationalUnitSourceType = $map['organizationalUnitSourceType'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
