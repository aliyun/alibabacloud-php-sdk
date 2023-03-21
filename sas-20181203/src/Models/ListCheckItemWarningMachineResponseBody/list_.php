<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody\list_\fixList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody\list_\warningRiskList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $authVersion;

    /**
     * @var bool
     */
    public $bind;

    /**
     * @var fixList[]
     */
    public $fixList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var bool
     */
    public $portOpen;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var warningRiskList[]
     */
    public $warningRiskList;
    protected $_name = [
        'authVersion'     => 'AuthVersion',
        'bind'            => 'Bind',
        'fixList'         => 'FixList',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'portOpen'        => 'PortOpen',
        'prompt'          => 'Prompt',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
        'uuid'            => 'Uuid',
        'warningRiskList' => 'WarningRiskList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->fixList) {
            $res['FixList'] = [];
            if (null !== $this->fixList && \is_array($this->fixList)) {
                $n = 0;
                foreach ($this->fixList as $item) {
                    $res['FixList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->portOpen) {
            $res['PortOpen'] = $this->portOpen;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->warningRiskList) {
            $res['WarningRiskList'] = [];
            if (null !== $this->warningRiskList && \is_array($this->warningRiskList)) {
                $n = 0;
                foreach ($this->warningRiskList as $item) {
                    $res['WarningRiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['FixList'])) {
            if (!empty($map['FixList'])) {
                $model->fixList = [];
                $n              = 0;
                foreach ($map['FixList'] as $item) {
                    $model->fixList[$n++] = null !== $item ? fixList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['PortOpen'])) {
            $model->portOpen = $map['PortOpen'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['WarningRiskList'])) {
            if (!empty($map['WarningRiskList'])) {
                $model->warningRiskList = [];
                $n                      = 0;
                foreach ($map['WarningRiskList'] as $item) {
                    $model->warningRiskList[$n++] = null !== $item ? warningRiskList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
