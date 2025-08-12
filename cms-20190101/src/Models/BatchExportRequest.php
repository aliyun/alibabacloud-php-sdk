<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class BatchExportRequest extends Model
{
    /**
     * @var string
     */
    public $cursor;

    /**
     * @var int
     */
    public $length;

    /**
     * @var string[]
     */
    public $measurements;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'cursor' => 'Cursor',
        'length' => 'Length',
        'measurements' => 'Measurements',
        'metric' => 'Metric',
        'namespace' => 'Namespace',
    ];

    public function validate()
    {
        if (\is_array($this->measurements)) {
            Model::validateArray($this->measurements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->measurements) {
            if (\is_array($this->measurements)) {
                $res['Measurements'] = [];
                $n1 = 0;
                foreach ($this->measurements as $item1) {
                    $res['Measurements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
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
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['Measurements'])) {
            if (!empty($map['Measurements'])) {
                $model->measurements = [];
                $n1 = 0;
                foreach ($map['Measurements'] as $item1) {
                    $model->measurements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
