<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ApplyScenarioRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var bool
     */
    public $snDump;

    /**
     * @var bool
     */
    public $snForce;

    /**
     * @var bool
     */
    public $snStat;

    /**
     * @var bool
     */
    public $snTransfer;

    /**
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
