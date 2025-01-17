<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->groupConfig) {
            $this->groupConfig->validate();
        }
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupConfig) {
            $res['GroupConfig'] = null !== $this->groupConfig ? $this->groupConfig->toArray($noStream) : $this->groupConfig;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1             = 0;
                foreach ($this->outputs as $item1) {
                    $res['Outputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupConfig'])) {
            $model->groupConfig = MediaConvertOutputGroupConfig::fromMap($map['GroupConfig']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1             = 0;
                foreach ($map['Outputs'] as $item1) {
                    $model->outputs[$n1++] = MediaConvertOutputGroupOutput::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
