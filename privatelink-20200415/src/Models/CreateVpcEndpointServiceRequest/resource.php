<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointServiceRequest;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The ID of the service resource that is added to the endpoint service. You can specify up to 20 service resource IDs.
     *
     * @example lb-hp32z1wp5peaoox2q****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the service resource that is added to the endpoint service. You can add up to 20 service resources to the endpoint service. Valid values:
     *
     *   **slb**: Classic Load Balancer (CLB) instance
     *   **alb**: Application Load Balancer (ALB) instance
     *   **nlb**: Network Load Balancer (NLB) instance
     *
     * >  In regions where PrivateLink is supported, CLB instances deployed in virtual private clouds (VPCs) can serve as the service resources of the endpoint service.
     * @example slb
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The zone ID.
     *
     * @example cn-huhehaote-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
