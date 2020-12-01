<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileResponse\loginProfile;
use AlibabaCloud\Tea\Model;

class UpdateLoginProfileResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var loginProfile
     */
    public $loginProfile;
    protected $_name = [
        'requestId'    => 'RequestId',
        'loginProfile' => 'LoginProfile',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('loginProfile', $this->loginProfile, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->loginProfile) {
            $res['LoginProfile'] = null !== $this->loginProfile ? $this->loginProfile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLoginProfileResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LoginProfile'])) {
            $model->loginProfile = loginProfile::fromMap($map['LoginProfile']);
        }

        return $model;
    }
}
