<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedInfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $dashboardOfflineQuery;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 1
     *
     * @var int
     */
    public $report;
    protected $_name = [
        'dashboardOfflineQuery' => 'DashboardOfflineQuery',
        'page'                  => 'Page',
        'report'                => 'Report',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboardOfflineQuery) {
            $res['DashboardOfflineQuery'] = $this->dashboardOfflineQuery;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->report) {
            $res['Report'] = $this->report;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DashboardOfflineQuery'])) {
            $model->dashboardOfflineQuery = $map['DashboardOfflineQuery'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Report'])) {
            $model->report = $map['Report'];
        }

        return $model;
    }
}
