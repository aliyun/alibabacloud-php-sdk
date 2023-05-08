<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotPresetResponseBody;

use AlibabaCloud\Tea\Model;

class honeypotPreset extends Model
{
    /**
     * @example d6ece172-34d9-4942-99a4-b309cb55xxxx
     *
     * @var string
     */
    public $honeypotPresetId;
    protected $_name = [
        'honeypotPresetId' => 'HoneypotPresetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotPresetId) {
            $res['HoneypotPresetId'] = $this->honeypotPresetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honeypotPreset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotPresetId'])) {
            $model->honeypotPresetId = $map['HoneypotPresetId'];
        }

        return $model;
    }
}
