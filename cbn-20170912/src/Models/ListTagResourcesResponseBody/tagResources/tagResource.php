<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTagResourcesResponseBody\tagResources;

use AlibabaCloud\Tea\Model;

class tagResource extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-8z69wtwqel33lq****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. Valid values:
     *
     **Cen**: CEN instance
     *
     **BandwidthPackage**: bandwidth plan
     *
     **TransitRouter**: transit router
     *
     **TransitRouterVpcAttachment**: virtual private cloud (VPC) connection
     *
     **TransitRouterVbrAttachment**: virtual border router (VBR) connection
     *
     **TransitRouterPeerAttachment**: inter-region connection
     *
     **TransitRouterVpnAttachment**: VPN connection
     *
     **TransitRouterRouteTable**: route table
     *
     **Flowlog**: flow log
     *
     **TransitRouterMulticastDomain**: multicast domain
     *
     * @example CEN
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag key.
     *
     * @example test
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value.
     *
     * @example Bp
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
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
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagResource
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
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
