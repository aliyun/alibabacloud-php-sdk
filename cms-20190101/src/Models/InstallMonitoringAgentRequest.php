<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class InstallMonitoringAgentRequest extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example true
     *
     * @var bool
     */
    public $force;

    /**
     * @description The ID of the request.
     *
     * @example onlyInstallNotHasAgent
     *
     * @var string
     */
    public $installCommand;

    /**
     * @example i-m5e0k0bexac8tykr****
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'force'          => 'Force',
        'installCommand' => 'InstallCommand',
        'instanceIds'    => 'InstanceIds',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->installCommand) {
            $res['InstallCommand'] = $this->installCommand;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallMonitoringAgentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstallCommand'])) {
            $model->installCommand = $map['InstallCommand'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
