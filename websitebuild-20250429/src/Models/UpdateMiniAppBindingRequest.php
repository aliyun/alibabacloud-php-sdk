<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class UpdateMiniAppBindingRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $settingKey;

    /**
     * @var string
     */
    public $settingValue;
    protected $_name = [
        'bizId' => 'BizId',
        'channel' => 'Channel',
        'settingKey' => 'SettingKey',
        'settingValue' => 'SettingValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->settingKey) {
            $res['SettingKey'] = $this->settingKey;
        }

        if (null !== $this->settingValue) {
            $res['SettingValue'] = $this->settingValue;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['SettingKey'])) {
            $model->settingKey = $map['SettingKey'];
        }

        if (isset($map['SettingValue'])) {
            $model->settingValue = $map['SettingValue'];
        }

        return $model;
    }
}
