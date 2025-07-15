<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageUserInfoRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application whose user information you want to modify.
     *
     * This parameter is required.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2593195.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The ID of the user whose information you want to modify.
     *
     * This parameter is required.
     *
     * @example uid2
     *
     * @var string
     */
    public $userId;

    /**
     * @description The additional information about the user after the modification. The value can be up to 512 bytes in length.
     *
     * @example uid2meta2
     *
     * @var string
     */
    public $userMetaInfo;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'userId' => 'UserId',
        'userMetaInfo' => 'UserMetaInfo',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userMetaInfo) {
            $res['UserMetaInfo'] = $this->userMetaInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageUserInfoRequest
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserMetaInfo'])) {
            $model->userMetaInfo = $map['UserMetaInfo'];
        }

        return $model;
    }
}
