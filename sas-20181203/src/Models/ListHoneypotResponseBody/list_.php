<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The name of the management node.
     *
     * @example 0804-pre
     *
     * @var string
     */
    public $controlNodeName;

    /**
     * @description The ID of the honeypot.
     *
     * @example 76c2a1c72ef259777d96d55a7834e5f5d98f85666c49f76ad9caa447d8b7****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @description The display name of the honeypot image.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $honeypotImageDisplayName;

    /**
     * @description The ID of the honeypot image.
     *
     * @example sha256:eca5ced3757e46c24701e9ced4e652f2d730262d5685a4e001da22c4fb418fd4
     *
     * @var string
     */
    public $honeypotImageId;

    /**
     * @description The name of the honeypot image.
     *
     * @example tcp_proxy
     *
     * @var string
     */
    public $honeypotImageName;

    /**
     * @description The name of the honeypot.
     *
     * @example mx-rouyi
     *
     * @var string
     */
    public $honeypotName;

    /**
     * @description The ID of the management node.
     *
     * @example c94eff5b-ea48-4805-8b7f-e04d3509b117
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the custom configuration for the honeypot.
     *
     * @example a882e590-b87b-45a6-87b9-d0a3e5a0****
     *
     * @var string
     */
    public $presetId;

    /**
     * @description An array that consists of the status information about the honeypot.
     *
     * @var string[]
     */
    public $state;
    protected $_name = [
        'controlNodeName'          => 'ControlNodeName',
        'honeypotId'               => 'HoneypotId',
        'honeypotImageDisplayName' => 'HoneypotImageDisplayName',
        'honeypotImageId'          => 'HoneypotImageId',
        'honeypotImageName'        => 'HoneypotImageName',
        'honeypotName'             => 'HoneypotName',
        'nodeId'                   => 'NodeId',
        'presetId'                 => 'PresetId',
        'state'                    => 'State',
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
        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }
        if (null !== $this->honeypotImageDisplayName) {
            $res['HoneypotImageDisplayName'] = $this->honeypotImageDisplayName;
        }
        if (null !== $this->honeypotImageId) {
            $res['HoneypotImageId'] = $this->honeypotImageId;
        }
        if (null !== $this->honeypotImageName) {
            $res['HoneypotImageName'] = $this->honeypotImageName;
        }
        if (null !== $this->honeypotName) {
            $res['HoneypotName'] = $this->honeypotName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->presetId) {
            $res['PresetId'] = $this->presetId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }
        if (isset($map['HoneypotImageDisplayName'])) {
            $model->honeypotImageDisplayName = $map['HoneypotImageDisplayName'];
        }
        if (isset($map['HoneypotImageId'])) {
            $model->honeypotImageId = $map['HoneypotImageId'];
        }
        if (isset($map['HoneypotImageName'])) {
            $model->honeypotImageName = $map['HoneypotImageName'];
        }
        if (isset($map['HoneypotName'])) {
            $model->honeypotName = $map['HoneypotName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PresetId'])) {
            $model->presetId = $map['PresetId'];
        }
        if (isset($map['State'])) {
            if (!empty($map['State'])) {
                $model->state = $map['State'];
            }
        }

        return $model;
    }
}
