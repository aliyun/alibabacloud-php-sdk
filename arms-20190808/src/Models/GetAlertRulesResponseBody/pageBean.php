<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @var alertRules[]
     */
    public $alertRules;

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
        'alertRules' => 'AlertRules',
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
        if (null !== $this->alertRules) {
            $res['AlertRules'] = [];
            if (null !== $this->alertRules && \is_array($this->alertRules)) {
                $n = 0;
                foreach ($this->alertRules as $item) {
                    $res['AlertRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AlertRules'])) {
            if (!empty($map['AlertRules'])) {
                $model->alertRules = [];
                $n                 = 0;
                foreach ($map['AlertRules'] as $item) {
                    $model->alertRules[$n++] = null !== $item ? alertRules::fromMap($item) : $item;
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
