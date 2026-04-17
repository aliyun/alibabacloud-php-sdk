<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class MetricDefRespDTO extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $label;

    /**
     * @var bool
     */
    public $sortable;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'key' => 'key',
        'label' => 'label',
        'sortable' => 'sortable',
        'unit' => 'unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->sortable) {
            $res['sortable'] = $this->sortable;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
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
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['sortable'])) {
            $model->sortable = $map['sortable'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
