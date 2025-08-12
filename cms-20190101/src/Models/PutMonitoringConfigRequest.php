<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class PutMonitoringConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $autoInstall;

    /**
     * @var bool
     */
    public $enableInstallAgentNewECS;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoInstall' => 'AutoInstall',
        'enableInstallAgentNewECS' => 'EnableInstallAgentNewECS',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }

        if (null !== $this->enableInstallAgentNewECS) {
            $res['EnableInstallAgentNewECS'] = $this->enableInstallAgentNewECS;
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
        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }

        if (isset($map['EnableInstallAgentNewECS'])) {
            $model->enableInstallAgentNewECS = $map['EnableInstallAgentNewECS'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
