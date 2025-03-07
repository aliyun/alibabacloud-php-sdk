<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class MediaConvertOutputGroup extends Model
{
    /**
     * @var MediaConvertOutputGroupConfig
     */
    public $groupConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var MediaConvertOutputGroupOutput[]
     */
    public $outputs;
    protected $_name = [
        'groupConfig' => 'GroupConfig',
        'name'        => 'Name',
        'outputs'     => 'Outputs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupConfig) {
            $res['GroupConfig'] = null !== $this->groupConfig ? $this->groupConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MediaConvertOutputGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupConfig'])) {
            $model->groupConfig = MediaConvertOutputGroupConfig::fromMap($map['GroupConfig']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? MediaConvertOutputGroupOutput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
