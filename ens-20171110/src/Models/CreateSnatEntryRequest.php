<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateSnatEntryRequest extends Model
{
    /**
     * @var bool
     */
    public $eipAffinity;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var bool
     */
    public $ispAffinity;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $snatEntryName;

    /**
     * @var string
     */
    public $snatIp;

    /**
     * @var string
     */
    public $sourceCIDR;

    /**
     * @var string
     */
    public $sourceNetworkId;

    /**
     * @var string
     */
    public $sourceVSwitchId;

    /**
     * @var string
     */
    public $standbySnatIp;
    protected $_name = [
        'eipAffinity' => 'EipAffinity',
        'idleTimeout' => 'IdleTimeout',
        'ispAffinity' => 'IspAffinity',
        'natGatewayId' => 'NatGatewayId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp' => 'SnatIp',
        'sourceCIDR' => 'SourceCIDR',
        'sourceNetworkId' => 'SourceNetworkId',
        'sourceVSwitchId' => 'SourceVSwitchId',
        'standbySnatIp' => 'StandbySnatIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipAffinity) {
            $res['EipAffinity'] = $this->eipAffinity;
        }

        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }

        if (null !== $this->ispAffinity) {
            $res['IspAffinity'] = $this->ispAffinity;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }

        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }

        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }

        if (null !== $this->sourceNetworkId) {
            $res['SourceNetworkId'] = $this->sourceNetworkId;
        }

        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }

        if (null !== $this->standbySnatIp) {
            $res['StandbySnatIp'] = $this->standbySnatIp;
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
        if (isset($map['EipAffinity'])) {
            $model->eipAffinity = $map['EipAffinity'];
        }

        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }

        if (isset($map['IspAffinity'])) {
            $model->ispAffinity = $map['IspAffinity'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }

        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }

        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }

        if (isset($map['SourceNetworkId'])) {
            $model->sourceNetworkId = $map['SourceNetworkId'];
        }

        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }

        if (isset($map['StandbySnatIp'])) {
            $model->standbySnatIp = $map['StandbySnatIp'];
        }

        return $model;
    }
}
