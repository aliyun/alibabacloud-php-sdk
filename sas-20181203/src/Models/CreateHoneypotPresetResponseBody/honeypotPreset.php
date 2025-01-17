<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotPresetResponseBody;

use AlibabaCloud\Dara\Model;

class honeypotPreset extends Model
{
    /**
     * @var string
     */
    public $honeypotPresetId;
    protected $_name = [
        'honeypotPresetId' => 'HoneypotPresetId',
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

        return $model;
    }
}
