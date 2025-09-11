<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupsResponseBody\groups\attachedLoginPolicy;

class groups extends Model
{
    /**
     * @var attachedLoginPolicy
     */
    public $attachedLoginPolicy;

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
        'attachedLoginPolicy' => 'AttachedLoginPolicy',
        'authedResources' => 'AuthedResources',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'transferFileNeedApproval' => 'TransferFileNeedApproval',
        'userCount' => 'UserCount',
    ];

    public function validate()
    {
        if (null !== $this->attachedLoginPolicy) {
            $this->attachedLoginPolicy->validate();
        }
        if (\is_array($this->authedResources)) {
            Model::validateArray($this->authedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedLoginPolicy) {
            $res['AttachedLoginPolicy'] = null !== $this->attachedLoginPolicy ? $this->attachedLoginPolicy->toArray($noStream) : $this->attachedLoginPolicy;
        }

        if (null !== $this->authedResources) {
            if (\is_array($this->authedResources)) {
                $res['AuthedResources'] = [];
                foreach ($this->authedResources as $key1 => $value1) {
                    $res['AuthedResources'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedLoginPolicy'])) {
            $model->attachedLoginPolicy = attachedLoginPolicy::fromMap($map['AttachedLoginPolicy']);
        }

        if (isset($map['AuthedResources'])) {
            if (!empty($map['AuthedResources'])) {
                $model->authedResources = [];
                foreach ($map['AuthedResources'] as $key1 => $value1) {
                    $model->authedResources[$key1] = $value1;
                }
            }
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
