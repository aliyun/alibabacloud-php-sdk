<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters\egressRules;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersResponseBody\trafficMirrorFilters\ingressRules;
use AlibabaCloud\Tea\Model;

class trafficMirrorFilters extends Model
{
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
        'egressRules'                    => 'EgressRules',
        'ingressRules'                   => 'IngressRules',
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
