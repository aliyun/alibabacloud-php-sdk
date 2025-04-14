<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryEmbeddedInfoResponseBody\result;

use AlibabaCloud\Dara\Model;

class detail extends Model
{
    /**
     * @var int
     */
    public $dashboardOfflineQuery;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $report;
    protected $_name = [
        'dashboardOfflineQuery' => 'DashboardOfflineQuery',
        'page' => 'Page',
        'report' => 'Report',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
