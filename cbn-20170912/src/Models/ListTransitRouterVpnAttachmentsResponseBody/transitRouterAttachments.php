<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpnAttachmentsResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpnAttachmentsResponseBody\transitRouterAttachments\tags;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterVpnAttachmentsResponseBody\transitRouterAttachments\zones;
use AlibabaCloud\Tea\Model;

class transitRouterAttachments extends Model
{
    /**
     * @description Indicates the transit router can automatically advertise routes to the IPsec connection. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $autoPublishRouteEnabled;

    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The billing method of the VPN attachment.
     *
     * Only POSTPAY may be returned, which is the default pay-as-you-go billing method.
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the VPN connection was created.
     *
     * The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-07-08T08:45Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The type of resource attached to the transit router.
     *
     * Only **VPN** may be returned, which indicates that an IPsec-VPN connection is attached to the transit router.
     * @example VPN
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The status of the VPN connection. Valid values:
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
     * @description A list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The description of the IPsec-VPN connection.
     *
     * @example desctest
     *
     * @var string
     */
    public $transitRouterAttachmentDescription;

    /**
     * @description The ID of the VPN attachment.
     *
     * @example tr-attach-a6p8voaodog5c0****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The name of the VPN attachment.
     *
     * @example nametest
     *
     * @var string
     */
    public $transitRouterAttachmentName;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-p0wm740vjnbaprv0m****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-p0wtu1xgd0l7fjo7k****
     *
     * @var string
     */
    public $vpnId;

    /**
     * @description The ID of the Alibaba Cloud account to which the IPsec-VPN connection belongs.
     *
     * @example 1210123456123456
     *
     * @var int
     */
    public $vpnOwnerId;

    /**
     * @description The region ID of the IPsec-VPN connection.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpnRegionId;

    /**
     * @description The zones in which the VPN attachment is deployed.
     *
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'autoPublishRouteEnabled'            => 'AutoPublishRouteEnabled',
        'cenId'                              => 'CenId',
        'chargeType'                         => 'ChargeType',
        'creationTime'                       => 'CreationTime',
        'resourceType'                       => 'ResourceType',
        'status'                             => 'Status',
        'tags'                               => 'Tags',
        'transitRouterAttachmentDescription' => 'TransitRouterAttachmentDescription',
        'transitRouterAttachmentId'          => 'TransitRouterAttachmentId',
        'transitRouterAttachmentName'        => 'TransitRouterAttachmentName',
        'transitRouterId'                    => 'TransitRouterId',
        'vpnId'                              => 'VpnId',
        'vpnOwnerId'                         => 'VpnOwnerId',
        'vpnRegionId'                        => 'VpnRegionId',
        'zones'                              => 'Zones',
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
        if (null !== $this->vpnId) {
            $res['VpnId'] = $this->vpnId;
        }
        if (null !== $this->vpnOwnerId) {
            $res['VpnOwnerId'] = $this->vpnOwnerId;
        }
        if (null !== $this->vpnRegionId) {
            $res['VpnRegionId'] = $this->vpnRegionId;
        }
        if (null !== $this->zones) {
            $res['Zones'] = [];
            if (null !== $this->zones && \is_array($this->zones)) {
                $n = 0;
                foreach ($this->zones as $item) {
                    $res['Zones'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['VpnId'])) {
            $model->vpnId = $map['VpnId'];
        }
        if (isset($map['VpnOwnerId'])) {
            $model->vpnOwnerId = $map['VpnOwnerId'];
        }
        if (isset($map['VpnRegionId'])) {
            $model->vpnRegionId = $map['VpnRegionId'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n            = 0;
                foreach ($map['Zones'] as $item) {
                    $model->zones[$n++] = null !== $item ? zones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
