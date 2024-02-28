<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBNodeDirectVipInfoResponseBody\directVipInfo;

use AlibabaCloud\Tea\Model;

class vipInfo extends Model
{
    /**
     * @description The network type of the security group. Valid values:
     *
     *   **vpc**: Virtual Private Cloud (VPC)
     *
     * @example vpc
     *
     * @var string
     */
    public $netType;

    /**
     * @description The shard ID.
     *
     * @example r-8vb3679b04551444-db-2
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The port number. Valid values: **1024** to **65535**. Default value: **6379**.
     *
     * @example 6379
     *
     * @var string
     */
    public $port;

    /**
     * @description The VIP of the shard.
     *
     * @example 100.115.61.8
     *
     * @var string
     */
    public $vip;
    protected $_name = [
        'netType' => 'NetType',
        'nodeId'  => 'NodeId',
        'port'    => 'Port',
        'vip'     => 'Vip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->vip) {
            $res['Vip'] = $this->vip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vipInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Vip'])) {
            $model->vip = $map['Vip'];
        }

        return $model;
    }
}
