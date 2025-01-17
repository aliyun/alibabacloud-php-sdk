<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddIdcProbeRequest extends Model
{
    /**
     * @var string
     */
    public $idcName;
    /**
     * @var string
     */
    public $idcRegion;
    /**
     * @var int
     */
    public $intervalPeriod;
    /**
     * @var string
     */
    public $ipSegments;
    /**
     * @var string
     */
    public $linuxPort;
    /**
     * @var string
     */
    public $periodUnit;
    /**
     * @var string
     */
    public $uuids;
    /**
     * @var string
     */
    public $winPort;
    protected $_name = [
        'idcName'        => 'IdcName',
        'idcRegion'      => 'IdcRegion',
        'intervalPeriod' => 'IntervalPeriod',
        'ipSegments'     => 'IpSegments',
        'linuxPort'      => 'LinuxPort',
        'periodUnit'     => 'PeriodUnit',
        'uuids'          => 'Uuids',
        'winPort'        => 'WinPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->idcName) {
            $res['IdcName'] = $this->idcName;
        }

        if (null !== $this->idcRegion) {
            $res['IdcRegion'] = $this->idcRegion;
        }

        if (null !== $this->intervalPeriod) {
            $res['IntervalPeriod'] = $this->intervalPeriod;
        }

        if (null !== $this->ipSegments) {
            $res['IpSegments'] = $this->ipSegments;
        }

        if (null !== $this->linuxPort) {
            $res['LinuxPort'] = $this->linuxPort;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        if (null !== $this->winPort) {
            $res['WinPort'] = $this->winPort;
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
        if (isset($map['IdcName'])) {
            $model->idcName = $map['IdcName'];
        }

        if (isset($map['IdcRegion'])) {
            $model->idcRegion = $map['IdcRegion'];
        }

        if (isset($map['IntervalPeriod'])) {
            $model->intervalPeriod = $map['IntervalPeriod'];
        }

        if (isset($map['IpSegments'])) {
            $model->ipSegments = $map['IpSegments'];
        }

        if (isset($map['LinuxPort'])) {
            $model->linuxPort = $map['LinuxPort'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        if (isset($map['WinPort'])) {
            $model->winPort = $map['WinPort'];
        }

        return $model;
    }
}
