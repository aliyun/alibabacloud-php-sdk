<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ObservationChartsDTO;

use AlibabaCloud\Dara\Model;

class successRate extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'label' => 'label',
        'timestamp' => 'timestamp',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
