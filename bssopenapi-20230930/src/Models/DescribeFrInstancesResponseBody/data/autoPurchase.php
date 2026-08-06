<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeFrInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;

class autoPurchase extends Model
{
    /**
     * @var bool
     */
    public $alreadyAutoPurchase;

    /**
     * @var bool
     */
    public $settingAutoPurchase;

    /**
     * @var bool
     */
    public $supportAutoPurchase;
    protected $_name = [
        'alreadyAutoPurchase' => 'AlreadyAutoPurchase',
        'settingAutoPurchase' => 'SettingAutoPurchase',
        'supportAutoPurchase' => 'SupportAutoPurchase',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alreadyAutoPurchase) {
            $res['AlreadyAutoPurchase'] = $this->alreadyAutoPurchase;
        }

        if (null !== $this->settingAutoPurchase) {
            $res['SettingAutoPurchase'] = $this->settingAutoPurchase;
        }

        if (null !== $this->supportAutoPurchase) {
            $res['SupportAutoPurchase'] = $this->supportAutoPurchase;
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
        if (isset($map['AlreadyAutoPurchase'])) {
            $model->alreadyAutoPurchase = $map['AlreadyAutoPurchase'];
        }

        if (isset($map['SettingAutoPurchase'])) {
            $model->settingAutoPurchase = $map['SettingAutoPurchase'];
        }

        if (isset($map['SupportAutoPurchase'])) {
            $model->supportAutoPurchase = $map['SupportAutoPurchase'];
        }

        return $model;
    }
}
