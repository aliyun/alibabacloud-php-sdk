<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UpdateIpsecServerRequest extends Model
{
    /**
     * @description The client CIDR block. It refers to the CIDR block that is used to allocate an IP address to the client.
     *
     * >  The client CIDR block must not overlap with the CIDR block of the virtual private cloud (VPC).
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $clientIpPool;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to precheck the request without performing the operation. Valid values:
     *
     *   **true**: only prechecks the request. After the request passes the precheck, the system does not modify the configurations of the IPsec server. The system checks whether the required parameters are set, whether the values are in valid formats, and the service limits. If the request fails to pass the precheck, a corresponding error code is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): prechecks the request. After the request passes the precheck, the system modifies the configurations of the IPsec server.
     *
     * @example false
     *
     * @var string
     */
    public $dryRun;

    /**
     * @description Specifies whether to delete the current IPsec tunnel and reinitiate negotiations. Valid values:
     *
     *   **true**: starts the negotiation immediately after the configuration is completed.
     *   **false** (default): initiates negotiations when inbound traffic is detected.
     *
     * @example false
     *
     * @var bool
     */
    public $effectImmediately;

    /**
     * @description The configuration of Phase 1 negotiations. Valid values:
     *
     *   **IkeVersion**: the IKE version. Valid values: **ikev1** and **ikev2**. Default value: **ikev2**.
     *   **IkeMode**: the IKE negotiation mode. Default value: **main**.
     *   **IkeEncAlg**: the encryption algorithm that is used in Phase 1 negotiations. Default value: **aes**.
     *   **IkeAuthAlg**: the authentication algorithm that is used in Phase 1 negotiations. Default value: **sha1**.
     *   **IkePfs**: the Diffie-Hellman key exchange algorithm that is used in Phase 1 negotiations. Default value: **group2**.
     *   **IkeLifetime**: the SA lifetime determined by Phase 1 negotiations. Unit: seconds. Valid values: **0** to **86400**. Default value: **86400**.
     *   **LocalId**: the ID of the IPsec server. The value can be a fully qualified domain name (FQDN) or an IP address. By default, the ID of the IPsec server is the public IP address of the VPN gateway.
     *   **RemoteId**: the identifier of the customer gateway. The value can be an FQDN or an IP address. By default, this parameter is not specified.
     *
     * @example {"IkeVersion":"ikev2","IkeMode":"main","IkeEncAlg":"aes","IkeAuthAlg":"sha1","IkePfs":"group2","IkeLifetime":86400}
     *
     * @var string
     */
    public $ikeConfig;

    /**
     * @description The configuration of Phase 2 negotiations. Valid values:
     *
     *   **IpsecEncAlg**: the encryption algorithm that is used in Phase 2 negotiations. Default value: **aes**.
     *   **IpsecAuthAlg**: the authentication algorithm that is used in Phase 2 negotiations. Default value: **sha1**.
     *   **IpsecPfs**: forwards packets of all protocols. The Diffie-Hellman key exchange algorithm used in Phase 2 negotiations. Default value: **group2**.
     *   **IpsecLifetime**: the SA lifetime determined by Phase 2 negotiations. Unit: seconds. Valid values: **0** to **86400**. Default value: **86400**.
     *
     * @example {"IpsecEncAlg":"aes","IpsecAuthAlg":"sha1","IpsecPfs":"group2","IpsecLifetime":86400}
     *
     * @var string
     */
    public $ipsecConfig;

    /**
     * @description The ID of the IPsec server.
     *
     * @example iss-bp1bo3xuvcxo7ixll****
     *
     * @var string
     */
    public $ipsecServerId;

    /**
     * @description The name of the IPsec server.
     *
     * The name must be 1 to 100 characters in length, and cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $ipsecServerName;

    /**
     * @description The local CIDR blocks, which refer to the CIDR blocks on the virtual private cloud (VPC) side.
     *
     * Separate multiple CIDR blocks with commas (,). Example: 192.168.1.0/24,192.168.2.0/24.
     * @example 192.168.0.0/24,172.17.0.0/16
     *
     * @var string
     */
    public $localSubnet;

    /**
     * @description The pre-shared key.
     *
     * >  The pre-shared key of the IPsec server must be the same as the authentication key of the client. Otherwise, a connection cannot be established between the IPsec server and the client.
     * @example Cfd123****
     *
     * @var string
     */
    public $psk;

    /**
     * @description Specifies whether to enable pre-shared key authentication. If you set the value to **true**, pre-shared key authentication is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $pskEnabled;

    /**
     * @description The ID of the region where the IPsec server is created.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientIpPool'      => 'ClientIpPool',
        'clientToken'       => 'ClientToken',
        'dryRun'            => 'DryRun',
        'effectImmediately' => 'EffectImmediately',
        'ikeConfig'         => 'IkeConfig',
        'ipsecConfig'       => 'IpsecConfig',
        'ipsecServerId'     => 'IpsecServerId',
        'ipsecServerName'   => 'IpsecServerName',
        'localSubnet'       => 'LocalSubnet',
        'psk'               => 'Psk',
        'pskEnabled'        => 'PskEnabled',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIpPool) {
            $res['ClientIpPool'] = $this->clientIpPool;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = $this->ikeConfig;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = $this->ipsecConfig;
        }
        if (null !== $this->ipsecServerId) {
            $res['IpsecServerId'] = $this->ipsecServerId;
        }
        if (null !== $this->ipsecServerName) {
            $res['IpsecServerName'] = $this->ipsecServerName;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->psk) {
            $res['Psk'] = $this->psk;
        }
        if (null !== $this->pskEnabled) {
            $res['PskEnabled'] = $this->pskEnabled;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIpsecServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = $map['IkeConfig'];
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = $map['IpsecConfig'];
        }
        if (isset($map['IpsecServerId'])) {
            $model->ipsecServerId = $map['IpsecServerId'];
        }
        if (isset($map['IpsecServerName'])) {
            $model->ipsecServerName = $map['IpsecServerName'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['Psk'])) {
            $model->psk = $map['Psk'];
        }
        if (isset($map['PskEnabled'])) {
            $model->pskEnabled = $map['PskEnabled'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
