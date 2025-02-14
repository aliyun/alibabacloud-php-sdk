<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListOrganizationalUnitsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string[]
     */
    public $organizationalUnitIds;
    /**
     * @var string
     */
    public $organizationalUnitName;
    /**
     * @var string
     */
    public $organizationalUnitNameStartsWith;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
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
        if (\is_array($this->organizationalUnitIds)) {
            Model::validateArray($this->organizationalUnitIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->organizationalUnitIds) {
            if (\is_array($this->organizationalUnitIds)) {
                $res['OrganizationalUnitIds'] = [];
                $n1                           = 0;
                foreach ($this->organizationalUnitIds as $item1) {
                    $res['OrganizationalUnitIds'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrganizationalUnitIds'])) {
            if (!empty($map['OrganizationalUnitIds'])) {
                $model->organizationalUnitIds = [];
                $n1                           = 0;
                foreach ($map['OrganizationalUnitIds'] as $item1) {
                    $model->organizationalUnitIds[$n1++] = $item1;
                }
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
