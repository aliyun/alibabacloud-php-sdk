<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponseBody\page\alerts;

class page extends Model
{
    /**
     * @var alerts[]
     */
    public $alerts;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'alerts'   => 'Alerts',
        'page'     => 'Page',
        'pageSize' => 'PageSize',
        'total'    => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->alerts)) {
            Model::validateArray($this->alerts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alerts) {
            if (\is_array($this->alerts)) {
                $res['Alerts'] = [];
                $n1            = 0;
                foreach ($this->alerts as $item1) {
                    $res['Alerts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Alerts'])) {
            if (!empty($map['Alerts'])) {
                $model->alerts = [];
                $n1            = 0;
                foreach ($map['Alerts'] as $item1) {
                    $model->alerts[$n1++] = alerts::fromMap($item1);
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
