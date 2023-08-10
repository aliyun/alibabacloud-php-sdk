<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListOrganizationalUnitsRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 组织ID列表。size限制最大100。
     *
     * @example [ou_wovwffm62xifdziem7an7xxxxx]
     *
     * @var string[]
     */
    public $organizationalUnitIds;

    /**
     * @description The name of the organizational unit.
     *
     * @example name_001
     *
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @description 组织名称，左匹配
     *
     * @example name
     *
     * @var string
     */
    public $organizationalUnitNameStartsWith;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the parent organizational unit.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $parentId;
    protected $_name = [
        'instanceId'                       => 'InstanceId',
        'organizationalUnitIds'            => 'OrganizationalUnitIds',
        'organizationalUnitName'           => 'OrganizationalUnitName',
        'organizationalUnitNameStartsWith' => 'OrganizationalUnitNameStartsWith',
        'pageNumber'                       => 'PageNumber',
        'pageSize'                         => 'PageSize',
        'parentId'                         => 'ParentId',
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
        if (null !== $this->organizationalUnitIds) {
            $res['OrganizationalUnitIds'] = $this->organizationalUnitIds;
        }
        if (null !== $this->organizationalUnitName) {
            $res['OrganizationalUnitName'] = $this->organizationalUnitName;
        }
        if (null !== $this->organizationalUnitNameStartsWith) {
            $res['OrganizationalUnitNameStartsWith'] = $this->organizationalUnitNameStartsWith;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrganizationalUnitsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrganizationalUnitIds'])) {
            if (!empty($map['OrganizationalUnitIds'])) {
                $model->organizationalUnitIds = $map['OrganizationalUnitIds'];
            }
        }
        if (isset($map['OrganizationalUnitName'])) {
            $model->organizationalUnitName = $map['OrganizationalUnitName'];
        }
        if (isset($map['OrganizationalUnitNameStartsWith'])) {
            $model->organizationalUnitNameStartsWith = $map['OrganizationalUnitNameStartsWith'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
