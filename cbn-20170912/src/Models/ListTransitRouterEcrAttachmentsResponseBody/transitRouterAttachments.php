<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterEcrAttachmentsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterEcrAttachmentsResponseBody\transitRouterAttachments\tags;
use AlibabaCloud\Tea\Model;

class transitRouterAttachments extends Model
{
    /**
     * @description Indicates whether the Enterprise Edition transit router can automatically advertise routes to ECRs.
     *
     * The value is **true**, which indicates that the Enterprise Edition transit router can automatically advertise routes to ECRs.
     * @example true
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
     * @description The time when the ECR connection was created.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2021-06-15T02:14Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the ECR with which the ECR connection is associated.
     *
     * @example ecr-n78omt2qsko06y****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The ID of the Alibaba Cloud account to which the ECR connection belongs.
     *
     * @example 1688111111111111
     *
     * @var int
     */
    public $ecrOwnerId;

    /**
     * @description The entity that pays the fees of the network instance. Valid values: Valid values:
     *
     *   **PayByCenOwner**: The Alibaba Cloud account to which the transit router belongs pays the connection and data forwarding fees of the ECR.
     *   **PayByResourceOwner**: The Alibaba Cloud account to which the ECR belongs pays the connection and data forwarding fees of the ECR.
     *
     * @example PayByCenOwner
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The type of resource to which the transit router is connected. Valid values:
     *
     * The value is **ECR**, which indicates ECR connections.
     * @example ECR
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the ECR connection. Valid values:
     *
     *   **Attached**
     *   **Attaching**
     *   **Detaching**
     *
     * @example Attached
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The description of the ECR connection.
     *
     * @example desctest
     *
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @description The ID of the ECR connection.
     *
     * @example tr-attach-nls9fzkfat8934****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The name of the ECR connection.
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
     * @description The region ID of the transit router.
     *
     * You can call the [DescribeChildInstanceRegions](https://help.aliyun.com/document_detail/132080.html) operation to query the most recent region list.
     * @example cn-shanghai
     *
     * @var string
     */
    public $transitRouterRegionId;
    protected $_name = [
        'autoPublishRouteEnabled'            => 'AutoPublishRouteEnabled',
        'cenId'                              => 'CenId',
        'creationTime'                       => 'CreationTime',
        'ecrId'                              => 'EcrId',
        'ecrOwnerId'                         => 'EcrOwnerId',
        'orderType'                          => 'OrderType',
        'resourceType'                       => 'ResourceType',
        'status'                             => 'Status',
        'tags'                               => 'Tags',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentId'          => 'TransitRouterAttachmentId',
        'transitRouterAttachmentName'        => 'TransitRouterAttachmentName',
        'transitRouterId'                    => 'TransitRouterId',
        'transitRouterRegionId'              => 'TransitRouterRegionId',
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
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->ecrOwnerId) {
            $res['EcrOwnerId'] = $this->ecrOwnerId;
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
        if (null !== $this->transitRouterRegionId) {
            $res['TransitRouterRegionId'] = $this->transitRouterRegionId;
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
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['EcrOwnerId'])) {
            $model->ecrOwnerId = $map['EcrOwnerId'];
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
        if (isset($map['TransitRouterRegionId'])) {
            $model->transitRouterRegionId = $map['TransitRouterRegionId'];
        }

        return $model;
    }
}
