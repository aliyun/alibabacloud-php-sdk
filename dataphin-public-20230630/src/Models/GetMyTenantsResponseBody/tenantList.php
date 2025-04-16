<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetMyTenantsResponseBody;

use AlibabaCloud\Dara\Model;

class tenantList extends Model
{
    /**
     * @var int
     */
    public $deleteTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $opsTenant;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var bool
     */
    public $resourceLimited;

    /**
     * @var string[]
     */
    public $tenantTypeList;

    /**
     * @var string
     */
    public $titleType;

    /**
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

    public function validate()
    {
        if (\is_array($this->tenantTypeList)) {
            Model::validateArray($this->tenantTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tenantTypeList)) {
                $res['TenantTypeList'] = [];
                $n1 = 0;
                foreach ($this->tenantTypeList as $item1) {
                    $res['TenantTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->titleType) {
            $res['TitleType'] = $this->titleType;
        }

        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->tenantTypeList = [];
                $n1 = 0;
                foreach ($map['TenantTypeList'] as $item1) {
                    $model->tenantTypeList[$n1++] = $item1;
                }
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
