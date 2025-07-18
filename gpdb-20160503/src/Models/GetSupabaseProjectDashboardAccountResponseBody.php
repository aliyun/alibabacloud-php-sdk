<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class GetSupabaseProjectDashboardAccountResponseBody extends Model
{
    /**
     * @example xxpassword
     *
     * @var string
     */
    public $dashboardPassword;

    /**
     * @example xxuser
     *
     * @var string
     */
    public $dashboardUsername;

    /**
     * @example sbp-twmoe9bakow
     *
     * @var string
     */
    public $projectId;

    /**
     * @example supabase_prod
     *
     * @var string
     */
    public $projectName;

    /**
     * @example ABB39CC3-4488-4857-905D-2E4A051D****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dashboardPassword' => 'DashboardPassword',
        'dashboardUsername' => 'DashboardUsername',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboardPassword) {
            $res['DashboardPassword'] = $this->dashboardPassword;
        }
        if (null !== $this->dashboardUsername) {
            $res['DashboardUsername'] = $this->dashboardUsername;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSupabaseProjectDashboardAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DashboardPassword'])) {
            $model->dashboardPassword = $map['DashboardPassword'];
        }
        if (isset($map['DashboardUsername'])) {
            $model->dashboardUsername = $map['DashboardUsername'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
