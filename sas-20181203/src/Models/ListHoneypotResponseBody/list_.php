<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $controlNodeName;

    /**
     * @var string
     */
    public $honeypotId;

    /**
     * @var string
     */
    public $honeypotImageDisplayName;

    /**
     * @var string
     */
    public $honeypotImageId;

    /**
     * @var string
     */
    public $honeypotImageName;

    /**
     * @var string
     */
    public $honeypotName;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $presetId;

    /**
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
