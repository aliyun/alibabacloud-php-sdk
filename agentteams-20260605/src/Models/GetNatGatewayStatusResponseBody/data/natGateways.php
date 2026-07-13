<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetNatGatewayStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class natGateways extends Model
{
    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var bool
     */
    public $snatConfigured;

    /**
     * @var string
     */
    public $snatTableId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'natGatewayId' => 'NatGatewayId',
        'snatConfigured' => 'SnatConfigured',
        'snatTableId' => 'SnatTableId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->snatConfigured) {
            $res['SnatConfigured'] = $this->snatConfigured;
        }

        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
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
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['SnatConfigured'])) {
            $model->snatConfigured = $map['SnatConfigured'];
        }

        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
