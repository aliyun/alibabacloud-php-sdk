<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody\prometheusAlertTemplates\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody\prometheusAlertTemplates\labels;
use AlibabaCloud\Tea\Model;

class prometheusAlertTemplates extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1m
     *
     * @var string
     */
    public $duration;

    /**
     * @example node_memory_MemAvailable_bytes / node_memory_MemTotal_bytes * 100 < 10
     *
     * @var string
     */
    public $expression;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $type;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'alertName'   => 'AlertName',
        'annotations' => 'Annotations',
        'description' => 'Description',
        'duration'    => 'Duration',
        'expression'  => 'Expression',
        'labels'      => 'Labels',
        'type'        => 'Type',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                $n = 0;
                foreach ($this->annotations as $item) {
                    $res['Annotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prometheusAlertTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['Annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
