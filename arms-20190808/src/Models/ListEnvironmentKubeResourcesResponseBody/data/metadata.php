<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentKubeResourcesResponseBody\data;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var string[]
     */
    public $annotations;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'annotations' => 'Annotations',
        'labels' => 'Labels',
        'name' => 'Name',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['Annotations'] = [];
                foreach ($this->annotations as $key1 => $value1) {
                    $res['Annotations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                foreach ($map['Annotations'] as $key1 => $value1) {
                    $model->annotations[$key1] = $value1;
                }
            }
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
