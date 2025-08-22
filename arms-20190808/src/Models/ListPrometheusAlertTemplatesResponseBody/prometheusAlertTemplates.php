<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody\prometheusAlertTemplates\annotations;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody\prometheusAlertTemplates\labels;

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
     * @var string
     */
    public $duration;

    /**
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
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['Annotations'] = [];
                $n1 = 0;
                foreach ($this->annotations as $item1) {
                    $res['Annotations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n1 = 0;
                foreach ($map['Annotations'] as $item1) {
                    $model->annotations[$n1] = annotations::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
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
