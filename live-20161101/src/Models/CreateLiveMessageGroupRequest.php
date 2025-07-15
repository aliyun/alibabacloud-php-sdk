<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveMessageGroupRequest extends Model
{
    /**
     * @description The list of administrators.
     *
     * @var string[]
     */
    public $administrators;

    /**
     * @description The application ID.
     *
     * This parameter is required.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the group creator. The ID can be up to 64 bytes in length and can contain letters and digits.
     *
     * @example uid1
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2593195.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The ID of the group that you want to create. The group ID must be unique within your business. The ID can be up to 64 bytes in length and can contain letters and digits.
     *
     * This parameter is required.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The additional information about the group. The value can be up to 32 KB in length.
     *
     * @example testgroupinfo
     *
     * @var string
     */
    public $groupInfo;

    /**
     * @description The name of the group. The name can be up to 128 bytes in length.
     *
     * @example mytestgroup
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'administrators' => 'Administrators',
        'appId' => 'AppId',
        'creatorId' => 'CreatorId',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
        'groupInfo' => 'GroupInfo',
        'groupName' => 'GroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->administrators) {
            $res['Administrators'] = $this->administrators;
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

    /**
     * @param array $map
     *
     * @return CreateLiveMessageGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Administrators'])) {
            if (!empty($map['Administrators'])) {
                $model->administrators = $map['Administrators'];
            }
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
