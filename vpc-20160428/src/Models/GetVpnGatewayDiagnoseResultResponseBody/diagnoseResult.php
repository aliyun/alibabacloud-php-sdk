<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpnGatewayDiagnoseResultResponseBody;

use AlibabaCloud\Tea\Model;

class diagnoseResult extends Model
{
    /**
     * @description The diagnostic item.
     *
     *   **RouteEntryConflict**: route conflicts.
     *   **VpnRouteQuota**: the quota of destination-based routes for the VPN gateway.
     *   **VpnIPsecQuota**: the quota of IPsec-VPN connections for the VPN gateway.
     *   **VpnPbrRouteQuota**: the quota of policy-based routes for the VPN gateway.
     *   **VcoConfigConsistency**: the consistency of the IPsec-VPN connection.
     *   **VcoUserInternetIpConnectivity**: Internet connectivity of the customer gateway.
     *   **VcoPrivateConnectivity**: private network connectivity.
     *
     * For more information about the diagnostic items, see [Background information about quick diagnostics](https://help.aliyun.com/document_detail/190330.html).
     * @example RouteEntryConflict
     *
     * @var string
     */
    public $diagnoseName;

    /**
     * @description The diagnostic result.
     *
     * The system returns different results for each diagnostic item.
     *
     *   **RouteEntryConflict**: information about route conflicts.
     *
     *   **VpnRouteQuota**:
     *
     *   **quotaName**: the quota ID of destination-based routes.
     *   **quantity**: the quota of destination-based routes for the VPN gateway.
     *   **used**: the number of destination-based routes created for the VPN gateway.
     *
     *   **VpnIPsecQuota**:
     *
     *   **quotaName**: the quota ID of IPsec-VPN connections.
     *   **quantity**: the quota of IPsec-VPN connections for the VPN gateway.
     *   **used**: the number of IPsec-VPN connections created for the VPN gateway.
     *
     *   **VpnPbrRouteQuota**:
     *
     *   **quotaName**: the quota ID of policy-based routes.
     *   **quantity**: the quota of policy-based routes for the VPN gateway.
     *   **used**: the number of policy-based routes created for the VPN gateway.
     *
     *   **VcoConfigConsistency**:
     *
     *   **vcoLackConf**: The system cannot obtain the configuration of the peer of the IPsec-VPN connection.
     *   **vcoRunningConf**: the configurations that have been added to the peer of the IPsec-VPN connection.
     *   **vcoDiffConf**: the configurations that are inconsistent between the local end and the peer.
     *   **vcoConf**: the configurations that have been added to the local end.
     *
     *   **VcoUserInternetIpConnectivity**:
     *
     *   **targetIp**: the public IP address of the customer gateway.
     *   **rtt**: the latency when the system accesses the public IP address of the customer gateway. Unit: milliseconds.
     *   **lossRate**: the packet loss when the system accesses the public IP address of the customer gateway.
     *
     *   **VcoPrivateConnectivity**:
     *
     *   **targetIp**: the source IP address.
     *   **srcIp**: the destination IP address.
     *   **rtt**: the latency when the source IP address accesses the destination IP address. Unit: milliseconds.
     *   **lossRate**: the packet loss when the source IP address accesses the destination IP address.
     *
     * @example {\\"targetIp\\":\\"192.168.0.1\\",\\"srcIp\\":\\"192.168.1.1\\",\\"rtt\\":-1.0,\\"lossRate\\":100.0}
     *
     * @var string
     */
    public $diagnoseResultDescription;

    /**
     * @description The diagnostic result level.
     *
     *   **normal**
     *   **warning**
     *   **error**
     *
     * For more information, see [Background information about quick diagnostics](https://help.aliyun.com/document_detail/190330.html).
     * @example normal
     *
     * @var string
     */
    public $diagnoseResultLevel;
    protected $_name = [
        'diagnoseName'              => 'DiagnoseName',
        'diagnoseResultDescription' => 'DiagnoseResultDescription',
        'diagnoseResultLevel'       => 'DiagnoseResultLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseName) {
            $res['DiagnoseName'] = $this->diagnoseName;
        }
        if (null !== $this->diagnoseResultDescription) {
            $res['DiagnoseResultDescription'] = $this->diagnoseResultDescription;
        }
        if (null !== $this->diagnoseResultLevel) {
            $res['DiagnoseResultLevel'] = $this->diagnoseResultLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseName'])) {
            $model->diagnoseName = $map['DiagnoseName'];
        }
        if (isset($map['DiagnoseResultDescription'])) {
            $model->diagnoseResultDescription = $map['DiagnoseResultDescription'];
        }
        if (isset($map['DiagnoseResultLevel'])) {
            $model->diagnoseResultLevel = $map['DiagnoseResultLevel'];
        }

        return $model;
    }
}
