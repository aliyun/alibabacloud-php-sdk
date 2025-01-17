<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpcAttachmentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpcAttachmentsResponseBody\transitRouterAttachments\tags;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpcAttachmentsResponseBody\transitRouterAttachments\zoneMappings;

class transitRouterAttachments extends Model
{
    /**
     * @var bool
     */
    public $autoPublishRouteEnabled;
    /**
     * @var string
     */
    public $cenId;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $orderType;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $transitRouterAttachmentDescription;
    /**
     * @var string
     */
    public $transitRouterAttachmentId;
    /**
     * @var string
     */
    public $transitRouterAttachmentName;
    /**
     * @var string
     */
    public $transitRouterId;
    /**
     * @var string[]
     */
    public $transitRouterVPCAttachmentOptions;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var int
     */
    public $vpcOwnerId;
    /**
     * @var string
     */
    public $vpcRegionId;
    /**
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
        'transitRouterVPCAttachmentOptions'  => 'TransitRouterVPCAttachmentOptions',
        'vpcId'                              => 'VpcId',
        'vpcOwnerId'                         => 'VpcOwnerId',
        'vpcRegionId'                        => 'VpcRegionId',
        'zoneMappings'                       => 'ZoneMappings',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->transitRouterVPCAttachmentOptions)) {
            Model::validateArray($this->transitRouterVPCAttachmentOptions);
        }
        if (\is_array($this->zoneMappings)) {
            Model::validateArray($this->zoneMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->transitRouterVPCAttachmentOptions) {
            if (\is_array($this->transitRouterVPCAttachmentOptions)) {
                $res['TransitRouterVPCAttachmentOptions'] = [];
                foreach ($this->transitRouterVPCAttachmentOptions as $key1 => $value1) {
                    $res['TransitRouterVPCAttachmentOptions'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->zoneMappings)) {
                $res['ZoneMappings'] = [];
                $n1                  = 0;
                foreach ($this->zoneMappings as $item1) {
                    $res['ZoneMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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

        if (isset($map['TransitRouterVPCAttachmentOptions'])) {
            if (!empty($map['TransitRouterVPCAttachmentOptions'])) {
                $model->transitRouterVPCAttachmentOptions = [];
                foreach ($map['TransitRouterVPCAttachmentOptions'] as $key1 => $value1) {
                    $model->transitRouterVPCAttachmentOptions[$key1] = $value1;
                }
            }
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
                $n1                  = 0;
                foreach ($map['ZoneMappings'] as $item1) {
                    $model->zoneMappings[$n1++] = zoneMappings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
