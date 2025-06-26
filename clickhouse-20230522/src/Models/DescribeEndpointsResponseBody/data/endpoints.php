<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponseBody\data\endpoints\ports;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $IPAddress;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'IPAddress' => 'IPAddress',
        'netType' => 'NetType',
        'ports' => 'Ports',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'vpcInstanceId' => 'VpcInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['Ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['Ports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
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
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['Ports'] as $item1) {
                    $model->ports[$n1] = ports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
