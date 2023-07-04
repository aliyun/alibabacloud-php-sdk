<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpnGatewayDiagnoseResultResponseBody\diagnoseResult;
use AlibabaCloud\Tea\Model;

class GetVpnGatewayDiagnoseResultResponseBody extends Model
{
    /**
     * @description The time when the diagnostic started.
     *
     * The time follows the ISO8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     * @example 2022-12-15T05:28:57Z
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The ID of the diagnostic.
     *
     * @example vpndgn-uf6sgneym02lxyuv4****
     *
     * @var string
     */
    public $diagnoseId;

    /**
     * @description The information about the diagnostic items.
     *
     * @var diagnoseResult[]
     */
    public $diagnoseResult;

    /**
     * @description The timestamp when the system finishes diagnosing the item.
     *
     * The time follows the ISO8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     * @example 2022-12-15T05:29:08Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The number of diagnostic items that have been diagnosed.
     *
     * @example 7
     *
     * @var int
     */
    public $finishedCount;

    /**
     * @description The ID of the request.
     *
     * @example 312C4D5A-6563-5FC6-8C6E-A43A5A316FEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource that is diagnosed.
     *
     * @example vco-uf6huqsu63azl7mdp****
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The type of the resource.
     *
     * The value is set to **IPsec**, which indicates an IPsec-VPN connection.
     * @example IPsec
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The total number of diagnostic items.
     *
     * @example 7
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-uf6fzwp0ck3frwtbk****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'beginTime'          => 'BeginTime',
        'diagnoseId'         => 'DiagnoseId',
        'diagnoseResult'     => 'DiagnoseResult',
        'finishTime'         => 'FinishTime',
        'finishedCount'      => 'FinishedCount',
        'requestId'          => 'RequestId',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceType'       => 'ResourceType',
        'totalCount'         => 'TotalCount',
        'vpnGatewayId'       => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->diagnoseId) {
            $res['DiagnoseId'] = $this->diagnoseId;
        }
        if (null !== $this->diagnoseResult) {
            $res['DiagnoseResult'] = [];
            if (null !== $this->diagnoseResult && \is_array($this->diagnoseResult)) {
                $n = 0;
                foreach ($this->diagnoseResult as $item) {
                    $res['DiagnoseResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->finishedCount) {
            $res['FinishedCount'] = $this->finishedCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpnGatewayDiagnoseResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['DiagnoseId'])) {
            $model->diagnoseId = $map['DiagnoseId'];
        }
        if (isset($map['DiagnoseResult'])) {
            if (!empty($map['DiagnoseResult'])) {
                $model->diagnoseResult = [];
                $n                     = 0;
                foreach ($map['DiagnoseResult'] as $item) {
                    $model->diagnoseResult[$n++] = null !== $item ? diagnoseResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['FinishedCount'])) {
            $model->finishedCount = $map['FinishedCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
