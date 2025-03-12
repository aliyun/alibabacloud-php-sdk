<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotPresetResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The name of the management node.
     *
     * @example node1
     *
     * @var string
     */
    public $controlNodeName;

    /**
     * @description The display name of the honeypot image.
     *
     * @example Metabase
     *
     * @var string
     */
    public $honeypotImageDisplayName;

    /**
     * @description The name of the honeypot image.
     *
     * @example metabase
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @description The ID of the honeypot template.
     *
     * @example 3cc04a47-7229-418c-8101-f10a2887****
     *
     * @var string
     */
    public $honeypotPresetId;

    /**
     * @description The ID of the management node.
     *
     * @example c94eff5b-ea48-4805-8b7f-e04d3509****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The custom name of the honeypot template.
     *
     * @example WebMin-online
     *
     * @var string
     */
    public $presetName;

    /**
     * @description The type of the honeypot template. Valid values:
     *
     *   **TEMP**: automatically generated template
     *   **CUSTOM**: custom template
     *   **DEFAULT**: default template
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $presetType;
    protected $_name = [
        'controlNodeName'          => 'ControlNodeName',
        'honeypotImageDisplayName' => 'HoneypotImageDisplayName',
        'honeypotImageName'        => 'HoneypotImageName',
        'honeypotPresetId'         => 'HoneypotPresetId',
        'nodeId'                   => 'NodeId',
        'presetName'               => 'PresetName',
        'presetType'               => 'PresetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlNodeName) {
            $res['ControlNodeName'] = $this->controlNodeName;
        }
        if (null !== $this->honeypotImageDisplayName) {
            $res['HoneypotImageDisplayName'] = $this->honeypotImageDisplayName;
        }
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }
        if (null !== $this->honeypotPresetId) {
            $res['HoneypotPresetId'] = $this->honeypotPresetId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->presetName) {
            $res['PresetName'] = $this->presetName;
        }
        if (null !== $this->presetType) {
            $res['PresetType'] = $this->presetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlNodeName'])) {
            $model->controlNodeName = $map['ControlNodeName'];
        }
        if (isset($map['HoneypotImageDisplayName'])) {
            $model->honeypotImageDisplayName = $map['HoneypotImageDisplayName'];
        }
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['HoneypotPresetId'])) {
            $model->honeypotPresetId = $map['HoneypotPresetId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PresetName'])) {
            $model->presetName = $map['PresetName'];
        }
        if (isset($map['PresetType'])) {
            $model->presetType = $map['PresetType'];
        }

        return $model;
    }
}
