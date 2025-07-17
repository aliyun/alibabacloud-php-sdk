<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody\prometheusAlertTemplates\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody\prometheusAlertTemplates\labels;
use AlibabaCloud\Tea\Model;

class prometheusAlertTemplates extends Model
{
    /**
     * @description The name of the alert rule.
     *
     * @example The available memory on the node is less than 10%
     *
     * @var string
     */
    public $alertName;

    /**
     * @description The annotations of the alert rule.
     *
     * @var annotations[]
     */
    public $annotations;

    /**
     * @description The content of the alert notification. Tags can be referenced in the {{$labels.xxx}} format.
     *
     * @example The available memory on node {{ $labels.instance }} is less than 10%. Available memory: {{ $value }}%
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the alert. Valid values: 1 to 1440. Unit: minutes.
     *
     * @example 1m
     *
     * @var string
     */
    public $duration;

    /**
     * @description The expression of the alert rule.
     *
     * @example node_memory_MemAvailable_bytes / node_memory_MemTotal_bytes * 100 < 10
     *
     * @var string
     */
    public $expression;

    /**
     * @description The tags of the alert rule.
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description The type of the alert rule.
     *
     * @example Node
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the alert rule.
     *
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'alertName' => 'AlertName',
        'annotations' => 'Annotations',
        'description' => 'Description',
        'duration' => 'Duration',
        'expression' => 'Expression',
        'labels' => 'Labels',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate() {}

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
                $n = 0;
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
                $n = 0;
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
