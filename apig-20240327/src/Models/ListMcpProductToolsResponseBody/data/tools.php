<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListMcpProductToolsResponseBody\data;

use AlibabaCloud\Dara\Model;

class tools extends Model
{
    /**
     * @var mixed[]
     */
    public $annotations;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $inputSchema;

    /**
     * @var mixed[]
     */
    public $meta;

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
        'description' => 'description',
        'inputSchema' => 'inputSchema',
        'meta' => 'meta',
        'name' => 'name',
        'outputSchema' => 'outputSchema',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->inputSchema)) {
            Model::validateArray($this->inputSchema);
        }
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->inputSchema) {
            if (\is_array($this->inputSchema)) {
                $res['inputSchema'] = [];
                foreach ($this->inputSchema as $key1 => $value1) {
                    $res['inputSchema'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['meta'] = [];
                foreach ($this->meta as $key1 => $value1) {
                    $res['meta'][$key1] = $value1;
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['inputSchema'])) {
            if (!empty($map['inputSchema'])) {
                $model->inputSchema = [];
                foreach ($map['inputSchema'] as $key1 => $value1) {
                    $model->inputSchema[$key1] = $value1;
                }
            }
        }

        if (isset($map['meta'])) {
            if (!empty($map['meta'])) {
                $model->meta = [];
                foreach ($map['meta'] as $key1 => $value1) {
                    $model->meta[$key1] = $value1;
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
