<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetHoneypotPresetRequest extends Model
{
    /**
     * @var string
     */
    public $honeypotPresetId;
    /**
     * @var string
     */
    public $lang;
    protected $_name = [
        'honeypotPresetId' => 'HoneypotPresetId',
        'lang'             => 'Lang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->honeypotPresetId) {
            $res['HoneypotPresetId'] = $this->honeypotPresetId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['HoneypotPresetId'])) {
            $model->honeypotPresetId = $map['HoneypotPresetId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
