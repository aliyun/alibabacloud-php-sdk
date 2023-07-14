<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @var listAlerts[]
     */
    public $listAlerts;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'listAlerts' => 'ListAlerts',
        'page'       => 'Page',
        'size'       => 'Size',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listAlerts) {
            $res['ListAlerts'] = [];
            if (null !== $this->listAlerts && \is_array($this->listAlerts)) {
                $n = 0;
                foreach ($this->listAlerts as $item) {
                    $res['ListAlerts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListAlerts'])) {
            if (!empty($map['ListAlerts'])) {
                $model->listAlerts = [];
                $n                 = 0;
                foreach ($map['ListAlerts'] as $item) {
                    $model->listAlerts[$n++] = null !== $item ? listAlerts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
