<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetMiniAppBindingRequest extends Model
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
     * @var string[]
     */
    public $settingKeys;
    protected $_name = [
        'bizId' => 'BizId',
        'channel' => 'Channel',
        'settingKeys' => 'SettingKeys',
    ];

    public function validate()
    {
        if (\is_array($this->settingKeys)) {
            Model::validateArray($this->settingKeys);
        }
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

        if (null !== $this->settingKeys) {
            if (\is_array($this->settingKeys)) {
                $res['SettingKeys'] = [];
                $n1 = 0;
                foreach ($this->settingKeys as $item1) {
                    $res['SettingKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['SettingKeys'])) {
            if (!empty($map['SettingKeys'])) {
                $model->settingKeys = [];
                $n1 = 0;
                foreach ($map['SettingKeys'] as $item1) {
                    $model->settingKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
