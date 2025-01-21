<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAlertsResponseBody\pageBean\listAlerts;

class pageBean extends Model
{
    /**
     * @var listAlerts[]
     */
    public $listAlerts;
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
        'listAlerts' => 'ListAlerts',
        'page'       => 'Page',
        'size'       => 'Size',
        'total'      => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->listAlerts)) {
            Model::validateArray($this->listAlerts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listAlerts) {
            if (\is_array($this->listAlerts)) {
                $res['ListAlerts'] = [];
                $n1                = 0;
                foreach ($this->listAlerts as $item1) {
                    $res['ListAlerts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ListAlerts'])) {
            if (!empty($map['ListAlerts'])) {
                $model->listAlerts = [];
                $n1                = 0;
                foreach ($map['ListAlerts'] as $item1) {
                    $model->listAlerts[$n1++] = listAlerts::fromMap($item1);
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
