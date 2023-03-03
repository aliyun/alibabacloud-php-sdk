<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant;

use AlibabaCloud\Tea\Model;

class tenantConnections extends Model
{
    /**
     * @description The type of the address.
     *
     * @example MASTER
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The service mode of the connection address. Valid values:
     * - Clog: provides transaction log services.
     * @example ReadWrite
     *
     * @var string
     */
    public $connectionRole;

    /**
     * @description The list of zones corresponding to the tenant connection.
     *
     * @example ["cn-hangzhou-i", "cn-hangzhou-j"]
     *
     * @var string[]
     */
    public $connectionZones;

    /**
     * @description The Internet address for accessing the tenant.
     *
     * @example t32a7ru5u****mo.oceanbase.aliyuncs.com
     *
     * @var string
     */
    public $internetAddress;

    /**
     * @description The status of the Internet address for accessing the tenant. Valid values:
     * - ONLINE: The address is in service.
     * @example CLOSED
     *
     * @var string
     */
    public $internetAddressStatus;

    /**
     * @description The Internet port for accessing the tenant.
     *
     * @example 3306
     *
     * @var int
     */
    public $internetPort;

    /**
     * @description The intranet address for accessing the tenant.
     *
     * @example t32a7ru5u****.oceanbase.aliyuncs.com
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The primary zone corresponding to the address for accessing the tenant.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $intranetAddressMasterZoneId;

    /**
     * @description The standby zone corresponding to the address for accessing the tenant.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $intranetAddressSlaveZoneId;

    /**
     * @description The status of the intranet address for accessing the tenant.
     * The value ONLINE indicates that the address is in service.
     * @example ONLINE
     *
     * @var string
     */
    public $intranetAddressStatus;

    /**
     * @description The intranet port for accessing the tenant.
     *
     * @example 3306
     *
     * @var int
     */
    public $intranetPort;

    /**
     * @description Indicates whether to enable transaction splitting.
     *
     * @example true
     *
     * @var bool
     */
    public $transactionSplit;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp11k1aypnzu1l3whi****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1qiail1asmfe23t****
     *
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
