<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpdatePrometheusUserSettingRequest extends Model
{
    /**
     * @var string
     */
    public $settingValue;
    protected $_name = [
        'settingValue' => 'settingValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->settingValue) {
            $res['settingValue'] = $this->settingValue;
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
        if (isset($map['settingValue'])) {
            $model->settingValue = $map['settingValue'];
        }

        return $model;
    }
}
