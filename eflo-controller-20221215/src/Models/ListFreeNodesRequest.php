<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListFreeNodesRequest extends Model
{
    /**
     * @description The cluster number.
     *
     * @example A1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description The instance type.
     *
     * @example mock-machine-type2
     *
     * @var string
     */
    public $machineType;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start position of the query. Set this parameter to the value of the NextToken parameter that is returned from the last call.
     *
     * @example a3f2224a5ec7224116c4f5246120abe4
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The types of the returned nodes that are not used.
     *
     * @var string[]
     */
    public $operatingStates;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxno4vh5muoq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'hpnZone' => 'HpnZone',
        'machineType' => 'MachineType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'operatingStates' => 'OperatingStates',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate() {}

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
        if (null !== $this->operatingStates) {
            $res['OperatingStates'] = $this->operatingStates;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['OperatingStates'])) {
            if (!empty($map['OperatingStates'])) {
                $model->operatingStates = $map['OperatingStates'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
