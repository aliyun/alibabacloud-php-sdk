<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class ResetInstancePasswordRequest extends Model
{
    /**
     * @var string
     */
    public $dashboardPassword;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dashboardPassword' => 'DashboardPassword',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
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

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
