<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListAlertGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ag-8mklwpevk74****
     *
     * @var string
     */
    public $alertGroupId;

    /**
     * @example 50
     *
     * @var string
     */
    public $alertInstanceIds;

    /**
     * @example 1726834240000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example name
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 1726834240000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'alertGroupId'     => 'alertGroupId',
        'alertInstanceIds' => 'alertInstanceIds',
        'createTime'       => 'createTime',
        'description'      => 'description',
        'groupName'        => 'groupName',
        'updateTime'       => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertGroupId) {
            $res['alertGroupId'] = $this->alertGroupId;
        }
        if (null !== $this->alertInstanceIds) {
            $res['alertInstanceIds'] = $this->alertInstanceIds;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
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
        if (isset($map['alertGroupId'])) {
            $model->alertGroupId = $map['alertGroupId'];
        }
        if (isset($map['alertInstanceIds'])) {
            $model->alertInstanceIds = $map['alertInstanceIds'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
