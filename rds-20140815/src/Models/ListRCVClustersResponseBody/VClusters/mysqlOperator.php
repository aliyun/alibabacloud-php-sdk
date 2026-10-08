<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ListRCVClustersResponseBody\VClusters;

use AlibabaCloud\Dara\Model;

class mysqlOperator extends Model
{
    /**
     * @var string
     */
    public $dashboardPublicEndpoint;

    /**
     * @var string
     */
    public $dashboardUsername;

    /**
     * @var string
     */
    public $dashboardVpcEndpoint;

    /**
     * @var string
     */
    public $deployTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dashboardPublicEndpoint' => 'DashboardPublicEndpoint',
        'dashboardUsername' => 'DashboardUsername',
        'dashboardVpcEndpoint' => 'DashboardVpcEndpoint',
        'deployTime' => 'DeployTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardPublicEndpoint) {
            $res['DashboardPublicEndpoint'] = $this->dashboardPublicEndpoint;
        }

        if (null !== $this->dashboardUsername) {
            $res['DashboardUsername'] = $this->dashboardUsername;
        }

        if (null !== $this->dashboardVpcEndpoint) {
            $res['DashboardVpcEndpoint'] = $this->dashboardVpcEndpoint;
        }

        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DashboardPublicEndpoint'])) {
            $model->dashboardPublicEndpoint = $map['DashboardPublicEndpoint'];
        }

        if (isset($map['DashboardUsername'])) {
            $model->dashboardUsername = $map['DashboardUsername'];
        }

        if (isset($map['DashboardVpcEndpoint'])) {
            $model->dashboardVpcEndpoint = $map['DashboardVpcEndpoint'];
        }

        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
