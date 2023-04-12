<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByResourceTypeResponseBody\complianceResult;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceGroupByResourceTypeResponseBody\complianceResult\complianceResultList\compliances;
use AlibabaCloud\Tea\Model;

class complianceResultList extends Model
{
    /**
     * @var compliances[]
     */
    public $compliances;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'compliances'  => 'Compliances',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliances) {
            $res['Compliances'] = [];
            if (null !== $this->compliances && \is_array($this->compliances)) {
                $n = 0;
                foreach ($this->compliances as $item) {
                    $res['Compliances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compliances'])) {
            if (!empty($map['Compliances'])) {
                $model->compliances = [];
                $n                  = 0;
                foreach ($map['Compliances'] as $item) {
                    $model->compliances[$n++] = null !== $item ? compliances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
