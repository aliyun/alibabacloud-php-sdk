<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveMessageGroupBandRequest extends Model
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
     * @description The users whom you want to mute.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $bannedUsers;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application.
     *
     * >  Valid values: cn-shanghai and ap-southeast-1 (Singapore).
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
    protected $_name = [
        'appId' => 'AppId',
        'bannedUsers' => 'BannedUsers',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bannedUsers) {
            $res['BannedUsers'] = $this->bannedUsers;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveMessageGroupBandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BannedUsers'])) {
            if (!empty($map['BannedUsers'])) {
                $model->bannedUsers = $map['BannedUsers'];
            }
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
