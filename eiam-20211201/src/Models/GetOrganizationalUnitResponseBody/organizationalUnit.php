<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetOrganizationalUnitResponseBody;

use AlibabaCloud\Dara\Model;

class organizationalUnit extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $leaf;
    /**
     * @var string
     */
    public $organizationalUnitExternalId;
    /**
     * @var string
     */
    public $organizationalUnitId;
    /**
     * @var string
     */
    public $organizationalUnitName;
    /**
     * @var string
     */
    public $organizationalUnitSourceId;
    /**
     * @var string
     */
    public $organizationalUnitSourceType;
    /**
     * @var string
     */
    public $parentId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
