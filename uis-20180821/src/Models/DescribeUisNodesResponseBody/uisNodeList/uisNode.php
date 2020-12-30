<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisNodesResponseBody\uisNodeList;

use AlibabaCloud\Tea\Model;

class uisNode extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uisId;

    /**
     * @var string
     */
    public $uisNodeActiveIp;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $uisEniIps;

    /**
     * @var string
     */
    public $uisNodeAreaId;

    /**
     * @var string
     */
    public $uisNodeId;

    /**
     * @var string
     */
    public $uisNodeIps;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $uisNodeBandwidth;

    /**
     * @var int
     */
    public $ipAddrsNum;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'status'           => 'Status',
        'uisId'            => 'UisId',
        'uisNodeActiveIp'  => 'UisNodeActiveIp',
        'createTime'       => 'CreateTime',
        'uisEniIps'        => 'UisEniIps',
        'uisNodeAreaId'    => 'UisNodeAreaId',
        'uisNodeId'        => 'UisNodeId',
        'uisNodeIps'       => 'UisNodeIps',
        'description'      => 'Description',
        'uisNodeBandwidth' => 'UisNodeBandwidth',
        'ipAddrsNum'       => 'IpAddrsNum',
        'name'             => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uisId) {
            $res['UisId'] = $this->uisId;
        }
        if (null !== $this->uisNodeActiveIp) {
            $res['UisNodeActiveIp'] = $this->uisNodeActiveIp;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->uisEniIps) {
            $res['UisEniIps'] = $this->uisEniIps;
        }
        if (null !== $this->uisNodeAreaId) {
            $res['UisNodeAreaId'] = $this->uisNodeAreaId;
        }
        if (null !== $this->uisNodeId) {
            $res['UisNodeId'] = $this->uisNodeId;
        }
        if (null !== $this->uisNodeIps) {
            $res['UisNodeIps'] = $this->uisNodeIps;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->uisNodeBandwidth) {
            $res['UisNodeBandwidth'] = $this->uisNodeBandwidth;
        }
        if (null !== $this->ipAddrsNum) {
            $res['IpAddrsNum'] = $this->ipAddrsNum;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UisId'])) {
            $model->uisId = $map['UisId'];
        }
        if (isset($map['UisNodeActiveIp'])) {
            $model->uisNodeActiveIp = $map['UisNodeActiveIp'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UisEniIps'])) {
            $model->uisEniIps = $map['UisEniIps'];
        }
        if (isset($map['UisNodeAreaId'])) {
            $model->uisNodeAreaId = $map['UisNodeAreaId'];
        }
        if (isset($map['UisNodeId'])) {
            $model->uisNodeId = $map['UisNodeId'];
        }
        if (isset($map['UisNodeIps'])) {
            $model->uisNodeIps = $map['UisNodeIps'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UisNodeBandwidth'])) {
            $model->uisNodeBandwidth = $map['UisNodeBandwidth'];
        }
        if (isset($map['IpAddrsNum'])) {
            $model->ipAddrsNum = $map['IpAddrsNum'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
