<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpcAttachmentsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpcAttachmentsResponseBody\transitRouterAttachments\tags;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpcAttachmentsResponseBody\transitRouterAttachments\zoneMappings;
use AlibabaCloud\Tea\Model;

class transitRouterAttachments extends Model
{
    /**
     * @description Indicates whether the Enterprise Edition transit router automatically advertises routes to VPCs. Valid values:
     *
     *   **false:** (default)
     *   **true**
     *
     * @example true
     *
     * @var bool
     */
    public $autoPublishRouteEnabled;

    /**
     * @description The CEN instance ID.
     *
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The billing method of the VPC connection.
     *
     * Only **POSTPAY** may be returned, which is the default value and specifies the pay-as-you-go billing method.
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the VPC connection was created.
     *
     * The time follows the ISO8601 standard in the YYYY-MM-DDThh:mmZ format. The time is displayed in UTC.
     * @example 2021-06-15T02:14Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The entity that pays the fees of the network instance. Valid values:
     *
     *   **PayByCenOwner**: the Alibaba Cloud account that owns the CEN instance.
     *   **PayByResourceOwner**: the Alibaba Cloud account that owns the network instance.
     *
     * @example PayByCenOwner
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The type of resource to which the transit router is connected.
     *
     * Only **VPC** may be returned, which indicates VPCs.
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the VPC connection. Valid values:
     *
     *   **Attached**
     *   **Attaching**
     *   **Detaching**
     *   **Detached**
     *
     * @example Attached
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag key.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The description of the VPC connection.
     *
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @description The ID of the VPC connection.
     *
     * @example tr-attach-nls9fzkfat8934****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The name of the VPC connection.
     *
     * @example testname
     *
     * @var string
     */
    public $transitRouterAttachmentName;

    /**
     * @description The ID of the Enterprise Edition transit router.
     *
     * @example tr-bp1su1ytdxtataupl****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1h8vbrbcgohcju5****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 1250123456123456
     *
     * @var int
     */
    public $vpcOwnerId;

    /**
     * @description The region ID of the VPC.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;

    /**
     * @description The primary and secondary zones of the VPC connection and the vSwitches and elastic network interfaces (ENIs) of the VPC.
     *
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'autoPublishRouteEnabled'            => 'AutoPublishRouteEnabled',
        'cenId'                              => 'CenId',
        'chargeType'                         => 'ChargeType',
        'creationTime'                       => 'CreationTime',
        'orderType'                          => 'OrderType',
        'resourceType'                       => 'ResourceType',
        'status'                             => 'Status',
        'tags'                               => 'Tags',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentId'          => 'TransitRouterAttachmentId',
        'transitRouterAttachmentName'        => 'TransitRouterAttachmentName',
        'transitRouterId'                    => 'TransitRouterId',
        'vpcId'                              => 'VpcId',
        'vpcOwnerId'                         => 'VpcOwnerId',
        'vpcRegionId'                        => 'VpcRegionId',
        'zoneMappings'                       => 'ZoneMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPublishRouteEnabled) {
            $res['AutoPublishRouteEnabled'] = $this->autoPublishRouteEnabled;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->transitRouterAttachmentDescription) {
            $res['TransitRouterAttachmentDescription'] = $this->transitRouterAttachmentDescription;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }
        if (null !== $this->transitRouterAttachmentName) {
            $res['TransitRouterAttachmentName'] = $this->transitRouterAttachmentName;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcOwnerId) {
            $res['VpcOwnerId'] = $this->vpcOwnerId;
        }
        if (null !== $this->vpcRegionId) {
            $res['VpcRegionId'] = $this->vpcRegionId;
        }
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = [];
            if (null !== $this->zoneMappings && \is_array($this->zoneMappings)) {
                $n = 0;
                foreach ($this->zoneMappings as $item) {
                    $res['ZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transitRouterAttachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPublishRouteEnabled'])) {
            $model->autoPublishRouteEnabled = $map['AutoPublishRouteEnabled'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['TransitRouterAttachmentDescription'])) {
            $model->transitRouterAttachmentDescription = $map['TransitRouterAttachmentDescription'];
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }
        if (isset($map['TransitRouterAttachmentName'])) {
            $model->transitRouterAttachmentName = $map['TransitRouterAttachmentName'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcOwnerId'])) {
            $model->vpcOwnerId = $map['VpcOwnerId'];
        }
        if (isset($map['VpcRegionId'])) {
            $model->vpcRegionId = $map['VpcRegionId'];
        }
        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n                   = 0;
                foreach ($map['ZoneMappings'] as $item) {
                    $model->zoneMappings[$n++] = null !== $item ? zoneMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
