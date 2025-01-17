<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateHoneypotPresetRequest extends Model
{
    /**
     * @var string
     */
    public $honeypotImageName;
    /**
     * @var string
     */
    public $honeypotPresetId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $meta;
    /**
     * @var string
     */
    public $presetName;
    protected $_name = [
        'honeypotImageName' => 'HoneypotImageName',
        'honeypotPresetId'  => 'HoneypotPresetId',
        'lang'              => 'Lang',
        'meta'              => 'Meta',
        'presetName'        => 'PresetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }

        if (null !== $this->honeypotPresetId) {
            $res['HoneypotPresetId'] = $this->honeypotPresetId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }

        if (null !== $this->presetName) {
            $res['PresetName'] = $this->presetName;
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
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }

        if (isset($map['HoneypotPresetId'])) {
            $model->honeypotPresetId = $map['HoneypotPresetId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }

        if (isset($map['PresetName'])) {
            $model->presetName = $map['PresetName'];
        }

        return $model;
    }
}
