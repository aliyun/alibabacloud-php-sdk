<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataDomainsResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataDomainList extends Model
{
    /**
     * @example dm_code_name
     *
     * @var string
     */
    public $abbreviation;

    /**
     * @example 545844456
     *
     * @var int
     */
    public $bizUnitId;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 测试
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1241844456
     *
     * @var int
     */
    public $id;

    /**
     * @example 30010010
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example 张三
     *
     * @var string
     */
    public $lastModifierName;

    /**
     * @example dm_code_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 30010010
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @example 10232311
     *
     * @var int
     */
    public $parentId;
    protected $_name = [
        'abbreviation' => 'Abbreviation',
        'bizUnitId' => 'BizUnitId',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'lastModifierName' => 'LastModifierName',
        'name' => 'Name',
        'ownerName' => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'parentId' => 'ParentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abbreviation) {
            $res['Abbreviation'] = $this->abbreviation;
        }
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->lastModifierName) {
            $res['LastModifierName'] = $this->lastModifierName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDomainList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abbreviation'])) {
            $model->abbreviation = $map['Abbreviation'];
        }
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['LastModifierName'])) {
            $model->lastModifierName = $map['LastModifierName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
