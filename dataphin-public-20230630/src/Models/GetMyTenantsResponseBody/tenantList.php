<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetMyTenantsResponseBody;

use AlibabaCloud\Tea\Model;

class tenantList extends Model
{
    /**
     * @example 1717343597000
     *
     * @var int
     */
    public $deleteTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 132311
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $opsTenant;

    /**
     * @example 21323231
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example false
     *
     * @var bool
     */
    public $resourceLimited;

    /**
     * @var string[]
     */
    public $tenantTypeList;

    /**
     * @example icon
     *
     * @var string
     */
    public $titleType;

    /**
     * @example true
     *
     * @var bool
     */
    public $visible;
    protected $_name = [
        'deleteTime' => 'DeleteTime',
        'deleted' => 'Deleted',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'opsTenant' => 'OpsTenant',
        'ownerId' => 'OwnerId',
        'resourceLimited' => 'ResourceLimited',
        'tenantTypeList' => 'TenantTypeList',
        'titleType' => 'TitleType',
        'visible' => 'Visible',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteTime) {
            $res['DeleteTime'] = $this->deleteTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->opsTenant) {
            $res['OpsTenant'] = $this->opsTenant;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceLimited) {
            $res['ResourceLimited'] = $this->resourceLimited;
        }
        if (null !== $this->tenantTypeList) {
            $res['TenantTypeList'] = $this->tenantTypeList;
        }
        if (null !== $this->titleType) {
            $res['TitleType'] = $this->titleType;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteTime'])) {
            $model->deleteTime = $map['DeleteTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OpsTenant'])) {
            $model->opsTenant = $map['OpsTenant'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceLimited'])) {
            $model->resourceLimited = $map['ResourceLimited'];
        }
        if (isset($map['TenantTypeList'])) {
            if (!empty($map['TenantTypeList'])) {
                $model->tenantTypeList = $map['TenantTypeList'];
            }
        }
        if (isset($map['TitleType'])) {
            $model->titleType = $map['TitleType'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }

        return $model;
    }
}
