<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayRouteDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class flowMirror extends Model
{
    /**
     * @var int
     */
    public $percentage;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $targetServiceId;

    /**
     * @var string
     */
    public $targetServiceName;
    protected $_name = [
        'percentage' => 'Percentage',
        'port' => 'Port',
        'status' => 'Status',
        'targetServiceId' => 'TargetServiceId',
        'targetServiceName' => 'TargetServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetServiceId) {
            $res['TargetServiceId'] = $this->targetServiceId;
        }

        if (null !== $this->targetServiceName) {
            $res['TargetServiceName'] = $this->targetServiceName;
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
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetServiceId'])) {
            $model->targetServiceId = $map['TargetServiceId'];
        }

        if (isset($map['TargetServiceName'])) {
            $model->targetServiceName = $map['TargetServiceName'];
        }

        return $model;
    }
}
