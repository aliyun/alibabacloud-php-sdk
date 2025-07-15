<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageGroupBandShrinkRequest extends Model
{
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
     * @description Specifies whether to mute all users.
     *
     * @example false
     *
     * @var bool
     */
    public $bannedAll;

    /**
     * @description The ID of the user whom you want to mute. Separate multiple user IDs with commas (,). You can specify up to 30 users IDs.
     *
     * @var string
     */
    public $bannnedUsersShrink;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The ID of the user whom you do not want to mute when you set the BannedAll parameter to true. Separate multiple user IDs with commas (,). You can specify up to 30 users IDs.
     *
     * @var string
     */
    public $exceptUsersShrink;

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
    protected $_name = [
        'appId' => 'AppId',
        'bannedAll' => 'BannedAll',
        'bannnedUsersShrink' => 'BannnedUsers',
        'dataCenter' => 'DataCenter',
        'exceptUsersShrink' => 'ExceptUsers',
        'groupId' => 'GroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bannedAll) {
            $res['BannedAll'] = $this->bannedAll;
        }
        if (null !== $this->bannnedUsersShrink) {
            $res['BannnedUsers'] = $this->bannnedUsersShrink;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->exceptUsersShrink) {
            $res['ExceptUsers'] = $this->exceptUsersShrink;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageGroupBandShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BannedAll'])) {
            $model->bannedAll = $map['BannedAll'];
        }
        if (isset($map['BannnedUsers'])) {
            $model->bannnedUsersShrink = $map['BannnedUsers'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['ExceptUsers'])) {
            $model->exceptUsersShrink = $map['ExceptUsers'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
