<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class GetPlatformUserInfoForPartnerRequest extends Model
{
    /**
     * @example app-0wceagu85ceaaais
     *
     * @var string
     */
    public $appId;

    /**
     * @example MP
     *
     * @var string
     */
    public $platformType;

    /**
     * @example 123153124411
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'platformType' => 'PlatformType',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPlatformUserInfoForPartnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
