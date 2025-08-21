<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListOAuth2Request\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListOAuth2Request\openCreatePlayingListRequest;

class CreatePlayingListOAuth2Request extends Model
{
    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var openCreatePlayingListRequest
     */
    public $openCreatePlayingListRequest;
    protected $_name = [
        'deviceInfo' => 'DeviceInfo',
        'openCreatePlayingListRequest' => 'OpenCreatePlayingListRequest',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->openCreatePlayingListRequest) {
            $this->openCreatePlayingListRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
        }

        if (null !== $this->openCreatePlayingListRequest) {
            $res['OpenCreatePlayingListRequest'] = null !== $this->openCreatePlayingListRequest ? $this->openCreatePlayingListRequest->toArray($noStream) : $this->openCreatePlayingListRequest;
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
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }

        if (isset($map['OpenCreatePlayingListRequest'])) {
            $model->openCreatePlayingListRequest = openCreatePlayingListRequest::fromMap($map['OpenCreatePlayingListRequest']);
        }

        return $model;
    }
}
