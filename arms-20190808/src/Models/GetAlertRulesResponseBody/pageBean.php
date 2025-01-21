<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAlertRulesResponseBody\pageBean\alertRules;

class pageBean extends Model
{
    /**
     * @var alertRules[]
     */
    public $alertRules;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $size;
    /**
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
        if (\is_array($this->alertRules)) {
            Model::validateArray($this->alertRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRules) {
            if (\is_array($this->alertRules)) {
                $res['AlertRules'] = [];
                $n1                = 0;
                foreach ($this->alertRules as $item1) {
                    $res['AlertRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertRules'])) {
            if (!empty($map['AlertRules'])) {
                $model->alertRules = [];
                $n1                = 0;
                foreach ($map['AlertRules'] as $item1) {
                    $model->alertRules[$n1++] = alertRules::fromMap($item1);
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
