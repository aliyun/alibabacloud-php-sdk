<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\policyInfo;

use AlibabaCloud\Dara\Model;

class deviceAttributeInfo extends Model
{
    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string[]
     */
    public $file;

    /**
     * @var string
     */
    public $firewall;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $innerIp;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $matchedSecurityBaseline;

    /**
     * @var string[]
     */
    public $process;

    /**
     * @var string
     */
    public $ssid;
    protected $_name = [
        'devTag' => 'DevTag',
        'deviceType' => 'DeviceType',
        'file' => 'File',
        'firewall' => 'Firewall',
        'hostname' => 'Hostname',
        'innerIp' => 'InnerIp',
        'internetIp' => 'InternetIp',
        'mac' => 'Mac',
        'matchedSecurityBaseline' => 'MatchedSecurityBaseline',
        'process' => 'Process',
        'ssid' => 'Ssid',
    ];

    public function validate()
    {
        if (\is_array($this->file)) {
            Model::validateArray($this->file);
        }
        if (\is_array($this->process)) {
            Model::validateArray($this->process);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->file) {
            if (\is_array($this->file)) {
                $res['File'] = [];
                $n1 = 0;
                foreach ($this->file as $item1) {
                    $res['File'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->firewall) {
            $res['Firewall'] = $this->firewall;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->matchedSecurityBaseline) {
            $res['MatchedSecurityBaseline'] = $this->matchedSecurityBaseline;
        }

        if (null !== $this->process) {
            if (\is_array($this->process)) {
                $res['Process'] = [];
                $n1 = 0;
                foreach ($this->process as $item1) {
                    $res['Process'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ssid) {
            $res['Ssid'] = $this->ssid;
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
        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['File'])) {
            if (!empty($map['File'])) {
                $model->file = [];
                $n1 = 0;
                foreach ($map['File'] as $item1) {
                    $model->file[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Firewall'])) {
            $model->firewall = $map['Firewall'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['MatchedSecurityBaseline'])) {
            $model->matchedSecurityBaseline = $map['MatchedSecurityBaseline'];
        }

        if (isset($map['Process'])) {
            if (!empty($map['Process'])) {
                $model->process = [];
                $n1 = 0;
                foreach ($map['Process'] as $item1) {
                    $model->process[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Ssid'])) {
            $model->ssid = $map['Ssid'];
        }

        return $model;
    }
}
