<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVbrAttachmentsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVbrAttachmentsResponseBody\transitRouterAttachments\tags;
use AlibabaCloud\Tea\Model;

class transitRouterAttachments extends Model
{
    /**
     * @description Indicates whether the Enterprise Edition transit router is allowed to automatically advertise routes to the VBR. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $autoPublishRouteEnabled;

    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The time when the VBR connection was created.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2021-06-15T15:20Z
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
     * @description The type of resource to which the transit router is connected. Valid values:
     *
     *   **VPC**
     *   **CCN**
     *   **VBR**
     *   **TR**
     *
     * @example VBR
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the VBR connection. Valid values:
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
     * @description A list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The description of the VBR connection.
     *
     * @example testdesc
     *
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @description The ID of the VBR connection.
     *
     * @example tr-attach-oyf70wfuorwx87****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The name of the VBR connection.
     *
     * @example testa
     *
     * @var string
     */
    public $transitRouterAttachmentName;

    /**
     * @description The description of the Enterprise Edition transit router.
     *
     * @example tr-bp1su1ytdxtataupl****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The VBR ID.
     *
     * @example vbr-bp1svadp4lq38janc****
     *
     * @var string
     */
    public $vbrId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * @example 1688111111111111
     *
     * @var int
     */
    public $vbrOwnerId;

    /**
     * @description The region ID of the VBR.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrRegionId;
    protected $_name = [
        'autoPublishRouteEnabled'            => 'AutoPublishRouteEnabled',
        'cenId'                              => 'CenId',
        'creationTime'                       => 'CreationTime',
        'orderType'                          => 'OrderType',
        'resourceType'                       => 'ResourceType',
        'status'                             => 'Status',
        'tags'                               => 'Tags',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentId'          => 'TransitRouterAttachmentId',
        'transitRouterAttachmentName'        => 'TransitRouterAttachmentName',
        'transitRouterId'                    => 'TransitRouterId',
        'vbrId'                              => 'VbrId',
        'vbrOwnerId'                         => 'VbrOwnerId',
        'vbrRegionId'                        => 'VbrRegionId',
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
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->vbrOwnerId) {
            $res['VbrOwnerId'] = $this->vbrOwnerId;
        }
        if (null !== $this->vbrRegionId) {
            $res['VbrRegionId'] = $this->vbrRegionId;
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
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }
        if (isset($map['VbrOwnerId'])) {
            $model->vbrOwnerId = $map['VbrOwnerId'];
        }
        if (isset($map['VbrRegionId'])) {
            $model->vbrRegionId = $map['VbrRegionId'];
        }

        return $model;
    }
}
