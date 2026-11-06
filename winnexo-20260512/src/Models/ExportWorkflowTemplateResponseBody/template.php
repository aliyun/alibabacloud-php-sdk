<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ExportWorkflowTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ExportWorkflowTemplateResponseBody\template\steps;

class template extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[][]
     */
    public $edges;

    /**
     * @var mixed[]
     */
    public $layout;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $schemaVersion;

    /**
     * @var steps[]
     */
    public $steps;
    protected $_name = [
        'description' => 'description',
        'edges' => 'edges',
        'layout' => 'layout',
        'name' => 'name',
        'schemaVersion' => 'schemaVersion',
        'steps' => 'steps',
    ];

    public function validate()
    {
        if (\is_array($this->edges)) {
            Model::validateArray($this->edges);
        }
        if (\is_array($this->layout)) {
            Model::validateArray($this->layout);
        }
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->edges) {
            if (\is_array($this->edges)) {
                $res['edges'] = [];
                $n1 = 0;
                foreach ($this->edges as $item1) {
                    if (\is_array($item1)) {
                        $res['edges'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['edges'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->layout) {
            if (\is_array($this->layout)) {
                $res['layout'] = [];
                foreach ($this->layout as $key1 => $value1) {
                    $res['layout'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['edges'])) {
            if (!empty($map['edges'])) {
                $model->edges = [];
                $n1 = 0;
                foreach ($map['edges'] as $item1) {
                    if (!empty($item1)) {
                        $model->edges[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->edges[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['layout'])) {
            if (!empty($map['layout'])) {
                $model->layout = [];
                foreach ($map['layout'] as $key1 => $value1) {
                    $model->layout[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['steps'])) {
            if (!empty($map['steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['steps'] as $item1) {
                    $model->steps[$n1] = steps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
