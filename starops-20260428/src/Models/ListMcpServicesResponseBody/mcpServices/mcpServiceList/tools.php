<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\ListMcpServicesResponseBody\mcpServices\mcpServiceList;

use AlibabaCloud\Dara\Model;

class tools extends Model
{
    /**
     * @var mixed[]
     */
    public $annotations;

    /**
     * @var bool
     */
    public $confirm;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var mixed[]
     */
    public $execution;

    /**
     * @var mixed[][]
     */
    public $icons;

    /**
     * @var mixed[]
     */
    public $inputSchema;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $outputSchema;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'annotations' => 'annotations',
        'confirm' => 'confirm',
        'description' => 'description',
        'displayName' => 'displayName',
        'enable' => 'enable',
        'execution' => 'execution',
        'icons' => 'icons',
        'inputSchema' => 'inputSchema',
        'name' => 'name',
        'outputSchema' => 'outputSchema',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->execution)) {
            Model::validateArray($this->execution);
        }
        if (\is_array($this->icons)) {
            Model::validateArray($this->icons);
        }
        if (\is_array($this->inputSchema)) {
            Model::validateArray($this->inputSchema);
        }
        if (\is_array($this->outputSchema)) {
            Model::validateArray($this->outputSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                foreach ($this->annotations as $key1 => $value1) {
                    $res['annotations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->confirm) {
            $res['confirm'] = $this->confirm;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->execution) {
            if (\is_array($this->execution)) {
                $res['execution'] = [];
                foreach ($this->execution as $key1 => $value1) {
                    $res['execution'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->icons) {
            if (\is_array($this->icons)) {
                $res['icons'] = [];
                $n1 = 0;
                foreach ($this->icons as $item1) {
                    if (\is_array($item1)) {
                        $res['icons'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['icons'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputSchema) {
            if (\is_array($this->inputSchema)) {
                $res['inputSchema'] = [];
                foreach ($this->inputSchema as $key1 => $value1) {
                    $res['inputSchema'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->outputSchema) {
            if (\is_array($this->outputSchema)) {
                $res['outputSchema'] = [];
                foreach ($this->outputSchema as $key1 => $value1) {
                    $res['outputSchema'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                foreach ($map['annotations'] as $key1 => $value1) {
                    $model->annotations[$key1] = $value1;
                }
            }
        }

        if (isset($map['confirm'])) {
            $model->confirm = $map['confirm'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['execution'])) {
            if (!empty($map['execution'])) {
                $model->execution = [];
                foreach ($map['execution'] as $key1 => $value1) {
                    $model->execution[$key1] = $value1;
                }
            }
        }

        if (isset($map['icons'])) {
            if (!empty($map['icons'])) {
                $model->icons = [];
                $n1 = 0;
                foreach ($map['icons'] as $item1) {
                    if (!empty($item1)) {
                        $model->icons[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->icons[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['inputSchema'])) {
            if (!empty($map['inputSchema'])) {
                $model->inputSchema = [];
                foreach ($map['inputSchema'] as $key1 => $value1) {
                    $model->inputSchema[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['outputSchema'])) {
            if (!empty($map['outputSchema'])) {
                $model->outputSchema = [];
                foreach ($map['outputSchema'] as $key1 => $value1) {
                    $model->outputSchema[$key1] = $value1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
