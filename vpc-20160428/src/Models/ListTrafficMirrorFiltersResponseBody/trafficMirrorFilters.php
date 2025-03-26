<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters\egressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters\ingressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters\tags;

class trafficMirrorFilters extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var egressRules[]
     */
    public $egressRules;

    /**
     * @var ingressRules[]
     */
    public $ingressRules;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $trafficMirrorFilterDescription;

    /**
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @var string
     */
    public $trafficMirrorFilterName;

    /**
     * @var string
     */
    public $trafficMirrorFilterStatus;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'egressRules' => 'EgressRules',
        'ingressRules' => 'IngressRules',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'trafficMirrorFilterDescription' => 'TrafficMirrorFilterDescription',
        'trafficMirrorFilterId' => 'TrafficMirrorFilterId',
        'trafficMirrorFilterName' => 'TrafficMirrorFilterName',
        'trafficMirrorFilterStatus' => 'TrafficMirrorFilterStatus',
    ];

    public function validate()
    {
        if (\is_array($this->egressRules)) {
            Model::validateArray($this->egressRules);
        }
        if (\is_array($this->ingressRules)) {
            Model::validateArray($this->ingressRules);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->egressRules) {
            if (\is_array($this->egressRules)) {
                $res['EgressRules'] = [];
                $n1 = 0;
                foreach ($this->egressRules as $item1) {
                    $res['EgressRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ingressRules) {
            if (\is_array($this->ingressRules)) {
                $res['IngressRules'] = [];
                $n1 = 0;
                foreach ($this->ingressRules as $item1) {
                    $res['IngressRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['EgressRules'])) {
            if (!empty($map['EgressRules'])) {
                $model->egressRules = [];
                $n1 = 0;
                foreach ($map['EgressRules'] as $item1) {
                    $model->egressRules[$n1++] = egressRules::fromMap($item1);
                }
            }
        }

        if (isset($map['IngressRules'])) {
            if (!empty($map['IngressRules'])) {
                $model->ingressRules = [];
                $n1 = 0;
                foreach ($map['IngressRules'] as $item1) {
                    $model->ingressRules[$n1++] = ingressRules::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
