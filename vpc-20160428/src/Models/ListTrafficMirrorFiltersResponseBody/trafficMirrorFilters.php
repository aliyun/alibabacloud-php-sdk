<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters\egressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters\ingressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters\tags;
use AlibabaCloud\Tea\Model;

class trafficMirrorFilters extends Model
{
    /**
     * @description The time when the filter is created.
     *
     * @example 2023-09-05T15:26Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The information about the outbound rules.
     *
     * @var egressRules[]
     */
    public $egressRules;

    /**
     * @description The information about the inbound rules.
     *
     * @var ingressRules[]
     */
    public $ingressRules;

    /**
     * @description The ID of the resource group to which the traffic mirror session belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The description of the filter.
     *
     * @example This is a filter.
     *
     * @var string
     */
    public $trafficMirrorFilterDescription;

    /**
     * @description The ID of the filter.
     *
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @description The filter name.
     *
     * @example abc
     *
     * @var string
     */
    public $trafficMirrorFilterName;

    /**
     * @description The status of the filter. Valid values:
     *
     *   **Creating**
     *   **Created**
     *   **Modifying**
     *   **Deleting**
     *
     * @example Created
     *
     * @var string
     */
    public $trafficMirrorFilterStatus;
    protected $_name = [
        'creationTime'                   => 'CreationTime',
        'egressRules'                    => 'EgressRules',
        'ingressRules'                   => 'IngressRules',
        'resourceGroupId'                => 'ResourceGroupId',
        'tags'                           => 'Tags',
        'trafficMirrorFilterDescription' => 'TrafficMirrorFilterDescription',
        'trafficMirrorFilterId'          => 'TrafficMirrorFilterId',
        'trafficMirrorFilterName'        => 'TrafficMirrorFilterName',
        'trafficMirrorFilterStatus'      => 'TrafficMirrorFilterStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->egressRules) {
            $res['EgressRules'] = [];
            if (null !== $this->egressRules && \is_array($this->egressRules)) {
                $n = 0;
                foreach ($this->egressRules as $item) {
                    $res['EgressRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ingressRules) {
            $res['IngressRules'] = [];
            if (null !== $this->ingressRules && \is_array($this->ingressRules)) {
                $n = 0;
                foreach ($this->ingressRules as $item) {
                    $res['IngressRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->trafficMirrorFilterDescription) {
            $res['TrafficMirrorFilterDescription'] = $this->trafficMirrorFilterDescription;
        }
        if (null !== $this->trafficMirrorFilterId) {
            $res['TrafficMirrorFilterId'] = $this->trafficMirrorFilterId;
        }
        if (null !== $this->trafficMirrorFilterName) {
            $res['TrafficMirrorFilterName'] = $this->trafficMirrorFilterName;
        }
        if (null !== $this->trafficMirrorFilterStatus) {
            $res['TrafficMirrorFilterStatus'] = $this->trafficMirrorFilterStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficMirrorFilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EgressRules'])) {
            if (!empty($map['EgressRules'])) {
                $model->egressRules = [];
                $n                  = 0;
                foreach ($map['EgressRules'] as $item) {
                    $model->egressRules[$n++] = null !== $item ? egressRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IngressRules'])) {
            if (!empty($map['IngressRules'])) {
                $model->ingressRules = [];
                $n                   = 0;
                foreach ($map['IngressRules'] as $item) {
                    $model->ingressRules[$n++] = null !== $item ? ingressRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrafficMirrorFilterDescription'])) {
            $model->trafficMirrorFilterDescription = $map['TrafficMirrorFilterDescription'];
        }
        if (isset($map['TrafficMirrorFilterId'])) {
            $model->trafficMirrorFilterId = $map['TrafficMirrorFilterId'];
        }
        if (isset($map['TrafficMirrorFilterName'])) {
            $model->trafficMirrorFilterName = $map['TrafficMirrorFilterName'];
        }
        if (isset($map['TrafficMirrorFilterStatus'])) {
            $model->trafficMirrorFilterStatus = $map['TrafficMirrorFilterStatus'];
        }

        return $model;
    }
}
