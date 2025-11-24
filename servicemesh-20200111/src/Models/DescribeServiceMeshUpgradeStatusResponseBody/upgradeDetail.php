<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshUpgradeStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpgradeDetailGatewayStatusRecordValue;

class upgradeDetail extends Model
{
    /**
     * @var int
     */
    public $finishedGatewaysNum;

    /**
     * @var UpgradeDetailGatewayStatusRecordValue[]
     */
    public $gatewayStatusRecord;

    /**
     * @var string
     */
    public $meshStatus;

    /**
     * @var int
     */
    public $totalGatewaysNum;
    protected $_name = [
        'finishedGatewaysNum' => 'FinishedGatewaysNum',
        'gatewayStatusRecord' => 'GatewayStatusRecord',
        'meshStatus' => 'MeshStatus',
        'totalGatewaysNum' => 'TotalGatewaysNum',
    ];

    public function validate()
    {
        if (\is_array($this->gatewayStatusRecord)) {
            Model::validateArray($this->gatewayStatusRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishedGatewaysNum) {
            $res['FinishedGatewaysNum'] = $this->finishedGatewaysNum;
        }

        if (null !== $this->gatewayStatusRecord) {
            if (\is_array($this->gatewayStatusRecord)) {
                $res['GatewayStatusRecord'] = [];
                foreach ($this->gatewayStatusRecord as $key1 => $value1) {
                    $res['GatewayStatusRecord'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->meshStatus) {
            $res['MeshStatus'] = $this->meshStatus;
        }

        if (null !== $this->totalGatewaysNum) {
            $res['TotalGatewaysNum'] = $this->totalGatewaysNum;
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
        if (isset($map['FinishedGatewaysNum'])) {
            $model->finishedGatewaysNum = $map['FinishedGatewaysNum'];
        }

        if (isset($map['GatewayStatusRecord'])) {
            if (!empty($map['GatewayStatusRecord'])) {
                $model->gatewayStatusRecord = [];
                foreach ($map['GatewayStatusRecord'] as $key1 => $value1) {
                    $model->gatewayStatusRecord[$key1] = UpgradeDetailGatewayStatusRecordValue::fromMap($value1);
                }
            }
        }

        if (isset($map['MeshStatus'])) {
            $model->meshStatus = $map['MeshStatus'];
        }

        if (isset($map['TotalGatewaysNum'])) {
            $model->totalGatewaysNum = $map['TotalGatewaysNum'];
        }

        return $model;
    }
}
