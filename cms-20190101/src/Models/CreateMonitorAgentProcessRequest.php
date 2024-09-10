<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorAgentProcessRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example i-2ze2d6j5uhg20x47****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the process.
     *
     * This parameter is required.
     * @example AliYunDun
     *
     * @var string
     */
    public $processName;

    /**
     * @description The user who launches the process.
     *
     * @example admin
     *
     * @var string
     */
    public $processUser;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'processName' => 'ProcessName',
        'processUser' => 'ProcessUser',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processUser) {
            $res['ProcessUser'] = $this->processUser;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorAgentProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessUser'])) {
            $model->processUser = $map['ProcessUser'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
