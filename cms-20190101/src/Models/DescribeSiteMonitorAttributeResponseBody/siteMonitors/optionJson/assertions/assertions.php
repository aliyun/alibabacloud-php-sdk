<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\assertions;

use AlibabaCloud\Tea\Model;

class assertions extends Model
{
    /**
     * @example lessThan
     *
     * @var string
     */
    public $operator;

    /**
     * @example json path
     *
     * @var string
     */
    public $property;

    /**
     * @example 0
     *
     * @var string
     */
    public $target;

    /**
     * @example response_time
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'operator' => 'operator',
        'property' => 'property',
        'target'   => 'target',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return assertions
     */
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
