<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListEngineConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class engineConfigs extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $configValue;

    /**
     * @example 2
     *
     * @var string
     */
    public $engineConfigId;

    /**
     * @example Pre
     *
     * @var string
     */
    public $environment;

    /**
     * @example 2023-08-07T01:43:42Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-08-27T12:00:00Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 2023-08-29 12:00:00
     *
     * @var string
     */
    public $gmtReleasedTime;

    /**
     * @example engine_config_v1
     *
     * @var string
     */
    public $name;

    /**
     * @example Released
     *
     * @var string
     */
    public $status;

    /**
     * @example 20230509161300
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'configValue'     => 'ConfigValue',
        'engineConfigId'  => 'EngineConfigId',
        'environment'     => 'Environment',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtReleasedTime' => 'GmtReleasedTime',
        'name'            => 'Name',
        'status'          => 'Status',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->engineConfigId) {
            $res['EngineConfigId'] = $this->engineConfigId;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->gmtReleasedTime) {
            $res['GmtReleasedTime'] = $this->gmtReleasedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return engineConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['EngineConfigId'])) {
            $model->engineConfigId = $map['EngineConfigId'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['GmtReleasedTime'])) {
            $model->gmtReleasedTime = $map['GmtReleasedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
