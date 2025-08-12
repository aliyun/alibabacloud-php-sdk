<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson\assertions;

use AlibabaCloud\Dara\Model;

class assertions extends Model
{
    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'operator' => 'operator',
        'property' => 'property',
        'target' => 'target',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->property) {
            $res['property'] = $this->property;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
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
        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['property'])) {
            $model->property = $map['property'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
