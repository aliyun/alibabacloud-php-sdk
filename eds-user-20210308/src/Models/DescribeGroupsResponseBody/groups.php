<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @var string[]
     */
    public $authedResources;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ug-2412ojkwtybd****
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $transferFileNeedApproval;

    /**
     * @var int
     */
    public $userCount;
    protected $_name = [
        'authedResources' => 'AuthedResources',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'transferFileNeedApproval' => 'TransferFileNeedApproval',
        'userCount' => 'UserCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authedResources) {
            $res['AuthedResources'] = $this->authedResources;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->transferFileNeedApproval) {
            $res['TransferFileNeedApproval'] = $this->transferFileNeedApproval;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthedResources'])) {
            $model->authedResources = $map['AuthedResources'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['TransferFileNeedApproval'])) {
            $model->transferFileNeedApproval = $map['TransferFileNeedApproval'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
