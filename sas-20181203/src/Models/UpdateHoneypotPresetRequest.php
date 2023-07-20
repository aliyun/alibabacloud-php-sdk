<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateHoneypotPresetRequest extends Model
{
    /**
     * @description The name of the image that is used for the honeypot.
     *
     * @example metabase
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @description The ID of the honeypot template.
     *
     * > You can call the [ListHoneypotPreset](~~ListHoneypotPreset~~) operation to query the IDs of honeypot templates.
     * @example f75eddce-e9d3-4a88-af95-b10b6f65xxxx
     *
     * @var string
     */
    public $honeypotPresetId;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The custom configurations of the honeypot template. The value is a JSON string that contains the following fields:
     *
     *   **portrait_option**: Social Source Tracing
     *   **burp**: Burp-specific Defense
     *   **trojan_git**: Git-specific Defense
     *
     * @example {"portrait_option":true,"burp":"open"}
     *
     * @var string
     */
    public $meta;

    /**
     * @description The custom name of the honeypot template.
     *
     * @example apc_web_python
     *
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
