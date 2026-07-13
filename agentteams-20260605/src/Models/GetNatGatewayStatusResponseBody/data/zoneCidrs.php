<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetNatGatewayStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class zoneCidrs extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var bool
     */
    public $covered;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $snatEntryId;

    /**
     * @var string
     */
    public $snatSourceCidr;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'covered' => 'Covered',
        'natGatewayId' => 'NatGatewayId',
        'snatEntryId' => 'SnatEntryId',
        'snatSourceCidr' => 'SnatSourceCidr',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->covered) {
            $res['Covered'] = $this->covered;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }

        if (null !== $this->snatSourceCidr) {
            $res['SnatSourceCidr'] = $this->snatSourceCidr;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['Covered'])) {
            $model->covered = $map['Covered'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }

        if (isset($map['SnatSourceCidr'])) {
            $model->snatSourceCidr = $map['SnatSourceCidr'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
