<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ApplyScenarioRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example b590lhguqs@28f515462f******
     *
     * @var string
     */
    public $appId;

    /**
     * @description The configuration of the business monitoring job. The value is a JSON string. For more information about this parameter, see the following additional information about the **Config** parameter.
     *
     * This parameter is required.
     * @example {"rpcType":"0","nameMatchType":"EQUALS","service":"/api/pop/test","operator":"and","filterItems":[{"type":"HttpHeaders","key":"uid","opt":"==","value":"123456789"}],"group":{"type":"HttpRequestParameters","key":"name"}}
     *
     * @var mixed[]
     */
    public $config;

    /**
     * @description The name of the business monitoring job.
     *
     * This parameter is required.
     * @example ScenarioName
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-zhangjaikou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The scenario where you want to use the business monitoring job. Valid values:
     *
     *   `USER-DEFINED`: user-defined. This is the default value.
     *   `EDAS-ROLLOUT`: application release in Enterprise Distributed Application Service (EDAS)
     *   `OAM-ROLLOUT`: application release based on Open Application Model (OAM)
     *   `MSC-CANARY`: canary release based on Microservice Engine (MSE)
     *
     * @example USER-DEFINED
     *
     * @var string
     */
    public $scenario;

    /**
     * @description The code of the business monitoring job. This parameter is not required when you create a business monitoring job. However, this parameter is required when you update a business monitoring job.
     *
     * @example a9f8****
     *
     * @var string
     */
    public $sign;

    /**
     * @description Specifies whether to record business parameters to the trace marked with the coloring sign.
     *
     *   `true`
     *   `false`: This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $snDump;

    /**
     * @description Specifies whether traffic in the trace marked with the coloring sign is all collected.
     *
     *   `true`
     *   `false`: This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $snForce;

    /**
     * @description Specifies whether to count traffic based on the coloring sign.
     *
     *   `true`
     *   `false`: This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $snStat;

    /**
     * @description Specifies whether the coloring sign is transparently passed down to downstream application nodes in the trace.
     *
     *   `true`
     *   `false`: This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $snTransfer;

    /**
     * @description Specifies whether the operation is an update operation.
     *
     *   `true`: update
     *   `false`: insert
     *
     * This parameter is required.
     * @example false
     *
     * @var bool
     */
    public $updateOption;
    protected $_name = [
        'appId'        => 'AppId',
        'config'       => 'Config',
        'name'         => 'Name',
        'regionId'     => 'RegionId',
        'scenario'     => 'Scenario',
        'sign'         => 'Sign',
        'snDump'       => 'SnDump',
        'snForce'      => 'SnForce',
        'snStat'       => 'SnStat',
        'snTransfer'   => 'SnTransfer',
        'updateOption' => 'UpdateOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->snDump) {
            $res['SnDump'] = $this->snDump;
        }
        if (null !== $this->snForce) {
            $res['SnForce'] = $this->snForce;
        }
        if (null !== $this->snStat) {
            $res['SnStat'] = $this->snStat;
        }
        if (null !== $this->snTransfer) {
            $res['SnTransfer'] = $this->snTransfer;
        }
        if (null !== $this->updateOption) {
            $res['UpdateOption'] = $this->updateOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyScenarioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SnDump'])) {
            $model->snDump = $map['SnDump'];
        }
        if (isset($map['SnForce'])) {
            $model->snForce = $map['SnForce'];
        }
        if (isset($map['SnStat'])) {
            $model->snStat = $map['SnStat'];
        }
        if (isset($map['SnTransfer'])) {
            $model->snTransfer = $map['SnTransfer'];
        }
        if (isset($map['UpdateOption'])) {
            $model->updateOption = $map['UpdateOption'];
        }

        return $model;
    }
}
