<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class InvalidateThirdPartyAppLoginStateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $thirdPartyAppId;
    protected $_name = [
        'deviceInfoShrink' => 'DeviceInfo',
        'thirdPartyAppId' => 'ThirdPartyAppId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }

        if (null !== $this->thirdPartyAppId) {
            $res['ThirdPartyAppId'] = $this->thirdPartyAppId;
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
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }

        if (isset($map['ThirdPartyAppId'])) {
            $model->thirdPartyAppId = $map['ThirdPartyAppId'];
        }

        return $model;
    }
}
