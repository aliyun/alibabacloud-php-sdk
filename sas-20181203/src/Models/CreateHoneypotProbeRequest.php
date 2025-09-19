<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotProbeRequest\honeypotBindList;

class CreateHoneypotProbeRequest extends Model
{
    /**
     * @var bool
     */
    public $arp;

    /**
     * @var string
     */
    public $businessGroupId;

    /**
     * @var string
     */
    public $controlNodeId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var honeypotBindList[]
     */
    public $honeypotBindList;

    /**
     * @var bool
     */
    public $ping;

    /**
     * @var string
     */
    public $probeType;

    /**
     * @var string
     */
    public $probeVersion;

    /**
     * @var string
     */
    public $proxyIp;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'arp' => 'Arp',
        'businessGroupId' => 'BusinessGroupId',
        'controlNodeId' => 'ControlNodeId',
        'displayName' => 'DisplayName',
        'honeypotBindList' => 'HoneypotBindList',
        'ping' => 'Ping',
        'probeType' => 'ProbeType',
        'probeVersion' => 'ProbeVersion',
        'proxyIp' => 'ProxyIp',
        'uuid' => 'Uuid',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->honeypotBindList)) {
            Model::validateArray($this->honeypotBindList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arp) {
            $res['Arp'] = $this->arp;
        }

        if (null !== $this->businessGroupId) {
            $res['BusinessGroupId'] = $this->businessGroupId;
        }

        if (null !== $this->controlNodeId) {
            $res['ControlNodeId'] = $this->controlNodeId;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->honeypotBindList) {
            if (\is_array($this->honeypotBindList)) {
                $res['HoneypotBindList'] = [];
                $n1 = 0;
                foreach ($this->honeypotBindList as $item1) {
                    $res['HoneypotBindList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ping) {
            $res['Ping'] = $this->ping;
        }

        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }

        if (null !== $this->probeVersion) {
            $res['ProbeVersion'] = $this->probeVersion;
        }

        if (null !== $this->proxyIp) {
            $res['ProxyIp'] = $this->proxyIp;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Arp'])) {
            $model->arp = $map['Arp'];
        }

        if (isset($map['BusinessGroupId'])) {
            $model->businessGroupId = $map['BusinessGroupId'];
        }

        if (isset($map['ControlNodeId'])) {
            $model->controlNodeId = $map['ControlNodeId'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['HoneypotBindList'])) {
            if (!empty($map['HoneypotBindList'])) {
                $model->honeypotBindList = [];
                $n1 = 0;
                foreach ($map['HoneypotBindList'] as $item1) {
                    $model->honeypotBindList[$n1] = honeypotBindList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Ping'])) {
            $model->ping = $map['Ping'];
        }

        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }

        if (isset($map['ProbeVersion'])) {
            $model->probeVersion = $map['ProbeVersion'];
        }

        if (isset($map['ProxyIp'])) {
            $model->proxyIp = $map['ProxyIp'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
