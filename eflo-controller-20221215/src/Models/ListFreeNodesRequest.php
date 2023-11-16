<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListFreeNodesRequest extends Model
{
    /**
     * @var string
     */
    public $hpnZone;

    /**
     * @example mock-machine-type2
     *
     * @var string
     */
    public $machineType;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example a3f2224a5ec7224116c4f5246120abe4
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'hpnZone'         => 'HpnZone',
        'machineType'     => 'MachineType',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFreeNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
