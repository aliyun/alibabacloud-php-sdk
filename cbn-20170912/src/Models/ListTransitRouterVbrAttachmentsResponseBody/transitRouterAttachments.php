<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVbrAttachmentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVbrAttachmentsResponseBody\transitRouterAttachments\tags;

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
     * @var string
     */
    public $vbrId;
    /**
     * @var int
     */
    public $vbrOwnerId;
    /**
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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
