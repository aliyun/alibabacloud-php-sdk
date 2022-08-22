<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentRequest\request;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\SearchContentRequest\userInfo;
use AlibabaCloud\Tea\Model;

class SearchContentRequest extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var request
     */
    public $request;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'request'    => 'Request',
        'userInfo'   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
