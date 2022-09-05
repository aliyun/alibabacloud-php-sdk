<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListActivatedAlertsResponseBody\page\alerts;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alerts) {
            $res['Alerts'] = [];
            if (null !== $this->alerts && \is_array($this->alerts)) {
                $n = 0;
                foreach ($this->alerts as $item) {
                    $res['Alerts'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return page
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alerts'])) {
            if (!empty($map['Alerts'])) {
                $model->alerts = [];
                $n             = 0;
                foreach ($map['Alerts'] as $item) {
                    $model->alerts[$n++] = null !== $item ? alerts::fromMap($item) : $item;
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
