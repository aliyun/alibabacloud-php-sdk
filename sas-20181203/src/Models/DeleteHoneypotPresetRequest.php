<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteHoneypotPresetRequest extends Model
{
    /**
     * @example 84104b7b-a2bc-41df-a190-12298f99f1ed
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
     * @return DeleteHoneypotPresetRequest
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
