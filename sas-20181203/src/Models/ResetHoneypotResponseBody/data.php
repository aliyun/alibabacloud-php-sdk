<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ResetHoneypotResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
        'controlNodeName' => 'ControlNodeName',
        'honeypotId' => 'HoneypotId',
        'honeypotImageDisplayName' => 'HoneypotImageDisplayName',
        'honeypotImageName' => 'HoneypotImageName',
        'honeypotName' => 'HoneypotName',
        'nodeId' => 'NodeId',
        'presetId' => 'PresetId',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->state)) {
            Model::validateArray($this->state);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->state)) {
                $res['State'] = [];
                $n1 = 0;
                foreach ($this->state as $item1) {
                    $res['State'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ControlNodeName'])) {
            $model->controlNodeName = $map['ControlNodeName'];
        }

        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }

        if (isset($map['HoneypotImageDisplayName'])) {
            $model->honeypotImageDisplayName = $map['HoneypotImageDisplayName'];
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
                $model->state = [];
                $n1 = 0;
                foreach ($map['State'] as $item1) {
                    $model->state[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
