<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model
{
    /**
     * @example ENTERPRISE
     *
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example root
     *
     * @var string
     */
    public $parentGroupId;

    /**
     * @example co-0esnf80jab***
     *
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'bizType' => 'BizType',
        'description' => 'Description',
        'groupName' => 'GroupName',
        'parentGroupId' => 'ParentGroupId',
        'solutionId' => 'SolutionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->parentGroupId) {
            $res['ParentGroupId'] = $this->parentGroupId;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ParentGroupId'])) {
            $model->parentGroupId = $map['ParentGroupId'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        return $model;
    }
}
