<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListProjectsResponseBody;

use AlibabaCloud\Dara\Model;

class projects extends Model
{
    /**
     * @var int
     */
    public $appCount;

    /**
     * @var int
     */
    public $databaseCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $hostCount;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string[]
     */
    public $memberIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'appCount' => 'AppCount',
        'databaseCount' => 'DatabaseCount',
        'description' => 'Description',
        'hostCount' => 'HostCount',
        'isDefault' => 'IsDefault',
        'memberIds' => 'MemberIds',
        'name' => 'Name',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->memberIds)) {
            Model::validateArray($this->memberIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }

        if (null !== $this->databaseCount) {
            $res['DatabaseCount'] = $this->databaseCount;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hostCount) {
            $res['HostCount'] = $this->hostCount;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->memberIds) {
            if (\is_array($this->memberIds)) {
                $res['MemberIds'] = [];
                $n1 = 0;
                foreach ($this->memberIds as $item1) {
                    $res['MemberIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }

        if (isset($map['DatabaseCount'])) {
            $model->databaseCount = $map['DatabaseCount'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HostCount'])) {
            $model->hostCount = $map['HostCount'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['MemberIds'])) {
            if (!empty($map['MemberIds'])) {
                $model->memberIds = [];
                $n1 = 0;
                foreach ($map['MemberIds'] as $item1) {
                    $model->memberIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
