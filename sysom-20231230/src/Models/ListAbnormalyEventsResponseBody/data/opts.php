<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody\data;

use AlibabaCloud\Dara\Model;

class opts extends Model
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $params;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'label'  => 'label',
        'params' => 'params',
        'type'   => 'type',
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

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
