<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class KickLiveMessageGroupUserRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application to which the interactive messaging group belongs.
     *
     * This parameter is required.
     *
     * @example coims-****
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
     * @description The ID of the interactive messaging group from which you want to remove the user.
     *
     * This parameter is required.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The user that you want to remove.
     *
     * This parameter is required.
     *
     * @example uid1
     *
     * @var string
     */
    public $kickoffUser;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
        'kickoffUser' => 'KickoffUser',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->kickoffUser) {
            $res['KickoffUser'] = $this->kickoffUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KickLiveMessageGroupUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['KickoffUser'])) {
            $model->kickoffUser = $map['KickoffUser'];
        }

        return $model;
    }
}
