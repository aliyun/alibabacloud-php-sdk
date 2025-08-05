<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class GetSupabaseProjectDashboardAccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $dashboardPassword;

    /**
     * @var string
     */
    public $dashboardUsername;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
