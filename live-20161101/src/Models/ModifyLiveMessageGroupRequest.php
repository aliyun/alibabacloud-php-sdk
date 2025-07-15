<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageGroupRequest extends Model
{
    /**
     * @description The list of administrators after your change.
     *
     * @var string[]
     */
    public $adminList;

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
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The group ID.
     *
     * This parameter is required.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The additional information about the group after the modification. The value can be up to 32 KB in length.
     *
     * @example newmeta
     *
     * @var string
     */
    public $groupInfo;

    /**
     * @description Specifies whether to change the group administrators.
     *
     * @example true
     *
     * @var bool
     */
    public $modifyAdmin;

    /**
     * @description Specifies whether to modify the additional information about the group.
     *
     * @example true
     *
     * @var bool
     */
    public $modifyInfo;
    protected $_name = [
        'adminList' => 'AdminList',
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
        'groupInfo' => 'GroupInfo',
        'modifyAdmin' => 'ModifyAdmin',
        'modifyInfo' => 'ModifyInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminList) {
            $res['AdminList'] = $this->adminList;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (null !== $this->modifyAdmin) {
            $res['ModifyAdmin'] = $this->modifyAdmin;
        }
        if (null !== $this->modifyInfo) {
            $res['ModifyInfo'] = $this->modifyInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminList'])) {
            if (!empty($map['AdminList'])) {
                $model->adminList = $map['AdminList'];
            }
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['ModifyAdmin'])) {
            $model->modifyAdmin = $map['ModifyAdmin'];
        }
        if (isset($map['ModifyInfo'])) {
            $model->modifyInfo = $map['ModifyInfo'];
        }

        return $model;
    }
}
