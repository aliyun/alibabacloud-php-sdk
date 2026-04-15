<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData;

use AlibabaCloud\Dara\Model;

class toolsetInstallations extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $spec;
    protected $_name = [
        'description' => 'description',
        'name' => 'name',
        'spec' => 'spec',
    ];

    public function validate()
    {
        if (\is_array($this->spec)) {
            Model::validateArray($this->spec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->spec) {
            if (\is_array($this->spec)) {
                $res['spec'] = [];
                foreach ($this->spec as $key1 => $value1) {
                    $res['spec'][$key1] = $value1;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['spec'])) {
            if (!empty($map['spec'])) {
                $model->spec = [];
                foreach ($map['spec'] as $key1 => $value1) {
                    $model->spec[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
