<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class UpdateProbeTaskRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $packetNumber;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $probeTaskId;

    /**
     * @var string
     */
    public $probeTaskSourceAddress;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sagId;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'domain' => 'Domain',
        'enable' => 'Enable',
        'packetNumber' => 'PacketNumber',
        'port' => 'Port',
        'probeTaskId' => 'ProbeTaskId',
        'probeTaskSourceAddress' => 'ProbeTaskSourceAddress',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'sagId' => 'SagId',
        'sn' => 'Sn',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->packetNumber) {
            $res['PacketNumber'] = $this->packetNumber;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->probeTaskId) {
            $res['ProbeTaskId'] = $this->probeTaskId;
        }

        if (null !== $this->probeTaskSourceAddress) {
            $res['ProbeTaskSourceAddress'] = $this->probeTaskSourceAddress;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sagId) {
            $res['SagId'] = $this->sagId;
        }

        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['PacketNumber'])) {
            $model->packetNumber = $map['PacketNumber'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['ProbeTaskId'])) {
            $model->probeTaskId = $map['ProbeTaskId'];
        }

        if (isset($map['ProbeTaskSourceAddress'])) {
            $model->probeTaskSourceAddress = $map['ProbeTaskSourceAddress'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SagId'])) {
            $model->sagId = $map['SagId'];
        }

        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
