<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CreateLiveMessageGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $administratorsShrink;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupInfo;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'administratorsShrink' => 'Administrators',
        'appId' => 'AppId',
        'creatorId' => 'CreatorId',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
        'groupInfo' => 'GroupInfo',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->administratorsShrink) {
            $res['Administrators'] = $this->administratorsShrink;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupInfo) {
            $res['GroupInfo'] = $this->groupInfo;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['Administrators'])) {
            $model->administratorsShrink = $map['Administrators'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupInfo'])) {
            $model->groupInfo = $map['GroupInfo'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
