<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\Tea\Model;

class tenantConnections extends Model
{
    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $connectionRole;

    /**
     * @var string[]
     */
    public $connectionZones;

    /**
     * @var string
     */
    public $internetAddress;

    /**
     * @var string
     */
    public $internetAddressStatus;

    /**
     * @var int
     */
    public $internetPort;

    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @var string
     */
    public $intranetAddressMasterZoneId;

    /**
     * @var string
     */
    public $intranetAddressSlaveZoneId;

    /**
     * @var string
     */
    public $intranetAddressStatus;

    /**
     * @var int
     */
    public $intranetPort;

    /**
     * @var bool
     */
    public $transactionSplit;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressType'                 => 'AddressType',
        'connectionRole'              => 'ConnectionRole',
        'connectionZones'             => 'ConnectionZones',
        'internetAddress'             => 'InternetAddress',
        'internetAddressStatus'       => 'InternetAddressStatus',
        'internetPort'                => 'InternetPort',
        'intranetAddress'             => 'IntranetAddress',
        'intranetAddressMasterZoneId' => 'IntranetAddressMasterZoneId',
        'intranetAddressSlaveZoneId'  => 'IntranetAddressSlaveZoneId',
        'intranetAddressStatus'       => 'IntranetAddressStatus',
        'intranetPort'                => 'IntranetPort',
        'transactionSplit'            => 'TransactionSplit',
        'vSwitchId'                   => 'VSwitchId',
        'vpcId'                       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->connectionRole) {
            $res['ConnectionRole'] = $this->connectionRole;
        }
        if (null !== $this->connectionZones) {
            $res['ConnectionZones'] = $this->connectionZones;
        }
        if (null !== $this->internetAddress) {
            $res['InternetAddress'] = $this->internetAddress;
        }
        if (null !== $this->internetAddressStatus) {
            $res['InternetAddressStatus'] = $this->internetAddressStatus;
        }
        if (null !== $this->internetPort) {
            $res['InternetPort'] = $this->internetPort;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->intranetAddressMasterZoneId) {
            $res['IntranetAddressMasterZoneId'] = $this->intranetAddressMasterZoneId;
        }
        if (null !== $this->intranetAddressSlaveZoneId) {
            $res['IntranetAddressSlaveZoneId'] = $this->intranetAddressSlaveZoneId;
        }
        if (null !== $this->intranetAddressStatus) {
            $res['IntranetAddressStatus'] = $this->intranetAddressStatus;
        }
        if (null !== $this->intranetPort) {
            $res['IntranetPort'] = $this->intranetPort;
        }
        if (null !== $this->transactionSplit) {
            $res['TransactionSplit'] = $this->transactionSplit;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['ConnectionRole'])) {
            $model->connectionRole = $map['ConnectionRole'];
        }
        if (isset($map['ConnectionZones'])) {
            if (!empty($map['ConnectionZones'])) {
                $model->connectionZones = $map['ConnectionZones'];
            }
        }
        if (isset($map['InternetAddress'])) {
            $model->internetAddress = $map['InternetAddress'];
        }
        if (isset($map['InternetAddressStatus'])) {
            $model->internetAddressStatus = $map['InternetAddressStatus'];
        }
        if (isset($map['InternetPort'])) {
            $model->internetPort = $map['InternetPort'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['IntranetAddressMasterZoneId'])) {
            $model->intranetAddressMasterZoneId = $map['IntranetAddressMasterZoneId'];
        }
        if (isset($map['IntranetAddressSlaveZoneId'])) {
            $model->intranetAddressSlaveZoneId = $map['IntranetAddressSlaveZoneId'];
        }
        if (isset($map['IntranetAddressStatus'])) {
            $model->intranetAddressStatus = $map['IntranetAddressStatus'];
        }
        if (isset($map['IntranetPort'])) {
            $model->intranetPort = $map['IntranetPort'];
        }
        if (isset($map['TransactionSplit'])) {
            $model->transactionSplit = $map['TransactionSplit'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
