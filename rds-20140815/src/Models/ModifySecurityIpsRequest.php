<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityIpsRequest extends Model
{
    /**
     * @description The attribute of the IP address whitelist. By default, this parameter is empty.
     *
     * > The IP address whitelists that have the hidden attribute are not displayed in the ApsaraDB RDS console. These IP address whitelists are used to access Alibaba Cloud services, such as Data Transmission Service (DTS).
     * @example hidden
     *
     * @var string
     */
    public $DBInstanceIPArrayAttribute;

    /**
     * @description The name of the IP address whitelist that you want to modify. Default value: **Default**.
     *
     * > A maximum of 200 IP address whitelists can be configured for each instance.
     * @example test
     *
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example pgm-bp18n0c8zt45****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The read-only instances to which you want to synchronize the IP address whitelist.
     *
     *   This parameter applies only to ApsaraDB RDS for PostgreSQL instances.
     *   If the instance is attached with a read-only instance, you can use this parameter to synchronize the IP address whitelist to the read-only instance. If the instance is attached with multiple read-only instances, separate the read-only instances with commas (,).
     *   If the instance is not attached with a read-only instance, leave this parameter empty.
     *
     * @example pgr-bp17yuz4dn3d****,pgr-bp1vn2ph54u1****
     *
     * @var string
     */
    public $freshWhiteListReadins;

    /**
     * @description The method that is used to modify the whitelist. Valid values:
     *
     *   **Cover**: Use the IP addresses and CIDR blocks that are specified in the **SecurityIps** parameter to overwrite the existing IP addresses and CIDR blocks in the IP address whitelist.
     *   **Append**: Add the IP addresses and CIDR blocks that are specified in the **SecurityIps** parameter to the IP address whitelist.
     *   **Delete**: Delete the IP addresses and CIDR blocks that are specified in the **SecurityIps** parameter from the IP address whitelist. You must retain at least one IP address or CIDR block.
     *
     * Default value: **Cover**.
     * @example Cover
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the IP addresses in the IP address whitelist. Set the value to IPv4. IPv6 is not supported.
     *
     * @example IPv4
     *
     * @var string
     */
    public $securityIPType;

    /**
     * @description The IP addresses in an IP address whitelist. Separate multiple IP addresses with commas (,). Each IP address in the IP address whitelist must be unique. The entries in the IP address whitelist must be in one of the following formats:
     *
     *   IP addresses, such as 10.23.XX.XX.
     *   CIDR blocks, such as 10.23.XX.XX/24. In this example, 24 indicates that the prefix of each IP address in the IP address whitelist is 24 bits in length. You can replace 24 with a value within the range of 1 to 32.
     *
     * > A maximum of 1,000 IP addresses or CIDR blocks can be added for each instance. If you want to add a large number of IP addresses, we recommend that you merge them into CIDR blocks, such as 10.23.XX.XX/24.
     * @example 10.23.XX.XX
     *
     * @var string
     */
    public $securityIps;

    /**
     * @description The network type of the IP address whitelist. Valid values:
     *
     *   **Classic**: classic network in enhanced whitelist mode
     *   **VPC**: virtual private cloud (VPC) in enhanced whitelist mode
     *   **MIX**: standard whitelist mode
     *
     * Default value: **MIX**.
     *
     * > In standard whitelist mode, IP addresses and CIDR blocks are added only to the default IP address whitelist. In enhanced whitelist mode, IP addresses and CIDR blocks are added to the IP address whitelists of the classic network type and the VPC network type.
     * @example Classic
     *
     * @var string
     */
    public $whitelistNetworkType;
    protected $_name = [
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
        'DBInstanceIPArrayName'      => 'DBInstanceIPArrayName',
        'DBInstanceId'               => 'DBInstanceId',
        'freshWhiteListReadins'      => 'FreshWhiteListReadins',
        'modifyMode'                 => 'ModifyMode',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'securityIPType'             => 'SecurityIPType',
        'securityIps'                => 'SecurityIps',
        'whitelistNetworkType'       => 'WhitelistNetworkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceIPArrayAttribute) {
            $res['DBInstanceIPArrayAttribute'] = $this->DBInstanceIPArrayAttribute;
        }
        if (null !== $this->DBInstanceIPArrayName) {
            $res['DBInstanceIPArrayName'] = $this->DBInstanceIPArrayName;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->freshWhiteListReadins) {
            $res['FreshWhiteListReadins'] = $this->freshWhiteListReadins;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }
        if (null !== $this->whitelistNetworkType) {
            $res['WhitelistNetworkType'] = $this->whitelistNetworkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceIPArrayAttribute'])) {
            $model->DBInstanceIPArrayAttribute = $map['DBInstanceIPArrayAttribute'];
        }
        if (isset($map['DBInstanceIPArrayName'])) {
            $model->DBInstanceIPArrayName = $map['DBInstanceIPArrayName'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['FreshWhiteListReadins'])) {
            $model->freshWhiteListReadins = $map['FreshWhiteListReadins'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }
        if (isset($map['WhitelistNetworkType'])) {
            $model->whitelistNetworkType = $map['WhitelistNetworkType'];
        }

        return $model;
    }
}
