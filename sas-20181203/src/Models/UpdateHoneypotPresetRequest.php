<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateHoneypotPresetRequest extends Model
{
    /**
     * @example metabase
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @example f75eddce-e9d3-4a88-af95-b10b6f656fda
     *
     * @var string
     */
    public $honeypotPresetId;

    /**
     * @example {\"portrait_option\":true,\"burp\":\"open\"}
     *
     * @var string
     */
    public $meta;

    /**
     * @example apc_web_python
     *
     * @var string
     */
    public $presetName;
    protected $_name = [
        'honeypotImageName' => 'HoneypotImageName',
        'honeypotPresetId'  => 'HoneypotPresetId',
        'meta'              => 'Meta',
        'presetName'        => 'PresetName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }
        if (null !== $this->honeypotPresetId) {
            $res['HoneypotPresetId'] = $this->honeypotPresetId;
        }
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }
        if (null !== $this->presetName) {
            $res['PresetName'] = $this->presetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHoneypotPresetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['HoneypotPresetId'])) {
            $model->honeypotPresetId = $map['HoneypotPresetId'];
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
