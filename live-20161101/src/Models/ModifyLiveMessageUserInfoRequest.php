<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class ModifyLiveMessageUserInfoRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userMetaInfo;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'userId' => 'UserId',
        'userMetaInfo' => 'UserMetaInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
