<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson\assertions;

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
     * @description The relationship between the list of expected aliases or IP addresses and the list of DNS results. Valid values:
     *
     *   IN_DNS: The list of expected values is a subset of the list of DNS results.
     *   DNS_IN: The list of DNS results is a subset of the list of expected values.
     *   EQUAL: The list of DNS results is the same as the list of expected values.
     *   ANY: The list of DNS results intersects with the list of expected values.
     *
     * @example json path
     *
     * @var string
     */
    public $property;

    /**
     * @example 1000
     *
     * @var string
     */
    public $target;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
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
