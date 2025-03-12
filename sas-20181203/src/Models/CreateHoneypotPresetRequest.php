<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateHoneypotPresetRequest extends Model
{
    /**
     * @description The name of the honeypot image.
     *
     * This parameter is required.
     * @example webmin
     *
     * @var string
     */
    public $honeypotImageName;

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
     * This parameter is required.
     * @example {"burp":"close","trojan_git":"close","portrait_option":"true"}
     *
     * @var string
     */
    public $meta;

    /**
     * @description The ID of the management node to which you want to deploy honeypots.
     *
     * This parameter is required.
     * @example 9373fe59-74d5-4505-bb24-c85352fb****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The custom name of the honeypot template.
     *
     * This parameter is required.
     * @example WebMin-online
     *
     * @var string
     */
    public $presetName;
    protected $_name = [
        'honeypotImageName' => 'HoneypotImageName',
        'lang'              => 'Lang',
        'meta'              => 'Meta',
        'nodeId'            => 'NodeId',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->presetName) {
            $res['PresetName'] = $this->presetName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHoneypotPresetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PresetName'])) {
            $model->presetName = $map['PresetName'];
        }

        return $model;
    }
}
