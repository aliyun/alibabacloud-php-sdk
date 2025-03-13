<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponseBody\data;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeEndpointsResponseBody\data\endpoints\ports;
use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The endpoint of the cluster.
     *
     * @example cc-****-clickhouse.clickhouseserver.pre.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The IP address.
     *
     * @example 172.30.XX.XX
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The network type of the endpoint. Valid values:
     *
     *   VPC
     *   PUBLIC
     *
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @description The details of the ports.
     *
     * @var ports[]
     */
    public $ports;

    /**
     * @description The state of the cluster.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-0xi8829****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-uf61z****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-uf61z****
     *
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

    public function validate(): void {}

    public function toMap()
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
            $res['Ports'] = [];
            if (null !== $this->ports && \is_array($this->ports)) {
                $n = 0;
                foreach ($this->ports as $item) {
                    $res['Ports'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return endpoints
     */
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
                $n = 0;
                foreach ($map['Ports'] as $item) {
                    $model->ports[$n++] = null !== $item ? ports::fromMap($item) : $item;
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
