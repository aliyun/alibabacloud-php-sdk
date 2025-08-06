<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $groupExternalId;

    /**
     * @var string[]
     */
    public $groupIds;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupNameStartsWith;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'groupExternalId' => 'GroupExternalId',
        'groupIds' => 'GroupIds',
        'groupName' => 'GroupName',
        'groupNameStartsWith' => 'GroupNameStartsWith',
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupExternalId) {
            $res['GroupExternalId'] = $this->groupExternalId;
        }

        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1 = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupNameStartsWith) {
            $res['GroupNameStartsWith'] = $this->groupNameStartsWith;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['GroupExternalId'])) {
            $model->groupExternalId = $map['GroupExternalId'];
        }

        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1 = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupNameStartsWith'])) {
            $model->groupNameStartsWith = $map['GroupNameStartsWith'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
