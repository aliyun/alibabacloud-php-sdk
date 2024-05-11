<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ConfigAppRequest extends Model
{
    /**
     * @description The process identifier (PID) of the application. Separate multiple PIDs with commas (,).
     *
     * This parameter is required.
     * @example iioe7jcnuk@582846f37******,atc889zkcf@d8deedfa9bf******
     *
     * @var string
     */
    public $appIds;

    /**
     * @description Specifies whether to turn on or off the main switch of the ARMS agent. The monitoring stops after the switch is turned off. If you do not specify this parameter, the main switch status of the ARMS agent is queried.
     *
     *   `true`: turns on the switch
     *   `false`: turns off the switch
     *
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the application. Set the value to **TRACE**.
     *
     * @example TRACE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appIds'   => 'AppIds',
        'enable'   => 'Enable',
        'regionId' => 'RegionId',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
