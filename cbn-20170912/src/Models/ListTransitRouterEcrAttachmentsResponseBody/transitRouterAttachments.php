<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterEcrAttachmentsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterEcrAttachmentsResponseBody\transitRouterAttachments\tags;
use AlibabaCloud\Tea\Model;

class transitRouterAttachments extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPublishRouteEnabled;

    /**
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 2021-06-15T02:14Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example ecr-n78omt2qsko06y****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example 1688111111111111
     *
     * @var int
     */
    public $ecrOwnerId;

    /**
     * @example PayByCenOwner
     *
     * @var string
     */
    public $orderType;

    /**
     * @example ECR
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example Attached
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example desctest
     *
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @example tr-attach-nls9fzkfat8934****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @example testname
     *
     * @var string
     */
    public $transitRouterAttachmentName;

    /**
     * @example tr-bp1su1ytdxtataupl****
     *
     * @var string
     */
    public $transitRouterId;

    /**
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
