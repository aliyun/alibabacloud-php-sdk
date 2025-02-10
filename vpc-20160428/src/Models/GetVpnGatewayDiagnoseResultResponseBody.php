<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpnGatewayDiagnoseResultResponseBody\diagnoseResult;

class GetVpnGatewayDiagnoseResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $beginTime;
    /**
     * @var string
     */
    public $diagnoseId;
    /**
     * @var diagnoseResult[]
     */
    public $diagnoseResult;
    /**
     * @var string
     */
    public $finishTime;
    /**
     * @var int
     */
    public $finishedCount;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resourceInstanceId;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var int
     */
    public $totalCount;
    /**
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
        if (\is_array($this->diagnoseResult)) {
            Model::validateArray($this->diagnoseResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->diagnoseId) {
            $res['DiagnoseId'] = $this->diagnoseId;
        }

        if (null !== $this->diagnoseResult) {
            if (\is_array($this->diagnoseResult)) {
                $res['DiagnoseResult'] = [];
                $n1                    = 0;
                foreach ($this->diagnoseResult as $item1) {
                    $res['DiagnoseResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                    = 0;
                foreach ($map['DiagnoseResult'] as $item1) {
                    $model->diagnoseResult[$n1++] = diagnoseResult::fromMap($item1);
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
