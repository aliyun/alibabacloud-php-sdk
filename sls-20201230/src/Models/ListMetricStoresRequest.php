<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListMetricStoresRequest extends Model
{
    /**
     * @description The type of the Metricstore. For example, you can set the parameter to standard to query Standard Metricstores.
     *
     * @example standard
     *
     * @var string
     */
    public $mode;

    /**
     * @description The name of the Metricstore. Fuzzy search is supported. If you do not specify this parameter, all Metricstores are involved.
     *
     * @example metric_store
     *
     * @var string
     */
    public $name;

    /**
     * @description The start position of the query.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of entries per page.
     *
     * @example 500
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'mode'   => 'mode',
        'name'   => 'name',
        'offset' => 'offset',
        'size'   => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetricStoresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
