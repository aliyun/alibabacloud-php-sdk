<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponseBody\snatTableEntries;

use AlibabaCloud\Dara\Model;

class snatTableEntry extends Model
{
    /**
     * @var string
     */
    public $eipAffinity;
    /**
     * @var string
     */
    public $natGatewayId;
    /**
     * @var string
     */
    public $networkInterfaceId;
    /**
     * @var string
     */
    public $snatEntryId;
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
    public $snatTableId;
    /**
     * @var string
     */
    public $sourceCIDR;
    /**
     * @var string
     */
    public $sourceVSwitchId;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'eipAffinity'        => 'EipAffinity',
        'natGatewayId'       => 'NatGatewayId',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'snatEntryId'        => 'SnatEntryId',
        'snatEntryName'      => 'SnatEntryName',
        'snatIp'             => 'SnatIp',
        'snatTableId'        => 'SnatTableId',
        'sourceCIDR'         => 'SourceCIDR',
        'sourceVSwitchId'    => 'SourceVSwitchId',
        'status'             => 'Status',
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

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }

        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }

        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }

        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
        }

        if (null !== $this->sourceCIDR) {
            $res['SourceCIDR'] = $this->sourceCIDR;
        }

        if (null !== $this->sourceVSwitchId) {
            $res['SourceVSwitchId'] = $this->sourceVSwitchId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }

        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }

        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }

        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }

        if (isset($map['SourceCIDR'])) {
            $model->sourceCIDR = $map['SourceCIDR'];
        }

        if (isset($map['SourceVSwitchId'])) {
            $model->sourceVSwitchId = $map['SourceVSwitchId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
