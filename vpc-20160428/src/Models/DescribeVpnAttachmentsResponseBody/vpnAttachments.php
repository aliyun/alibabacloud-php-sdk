<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponseBody\vpnAttachments\tags;
use AlibabaCloud\Tea\Model;

class vpnAttachments extends Model
{
    /**
     * @description The type of resource that is associated with the IPsec-VPN connection. The value is set to **CEN**, which indicates that the IPsec-VPN connection is associated with a transit router.
     *
     * @example CEN
     *
     * @var string
     */
    public $attachType;

    /**
     * @description Indicates whether the IPsec-VPN connection is associated with a transit router that belongs to another Alibaba Cloud account. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $crossAccountAuthorized;

    /**
     * @description The description of the IPsec-VPN connection.
     *
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the IPsec-VPN connection.
     *
     * @example vco-p0w2jpkhi2eeop6q6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the IPsec-VPN connection.
     *
     * @example nametest1
     *
     * @var string
     */
    public $name;

    /**
     * @description The system tags of the IPsec-VPN connection.
     *
     * You can check whether an IPsec-VPN connection supports BGP based on the system tags.
     *
     **BGPSupport**: indicates whether the IPsec-VPN connection supports BGP.
     *
     *   **true**
     *   **false**
     *
     * @example {\\"description\\":\\"forwarding 1.7.22\\",\\"VisuallySsl\\":\\"true\\",\\"PbrPriority\\":\\"true\\",\\"BGPSupport\\":\\"true\\",\\"IDaaSNewVersion\\":\\"true\\"}
     *
     * @var string
     */
    public $tag;

    /**
     * @description The list of tags to be added to the IPsec-VPN connection.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the transit router with which the IPsec-VPN connection is associated.
     *
     * @example tr-p0wkh4yryb1dnanqw****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The name of the transit router.
     *
     * @example nametest2
     *
     * @var string
     */
    public $transitRouterName;
    protected $_name = [
        'attachType' => 'AttachType',
        'crossAccountAuthorized' => 'CrossAccountAuthorized',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'tag' => 'Tag',
        'tags' => 'Tags',
        'transitRouterId' => 'TransitRouterId',
        'transitRouterName' => 'TransitRouterName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachType) {
            $res['AttachType'] = $this->attachType;
        }
        if (null !== $this->crossAccountAuthorized) {
            $res['CrossAccountAuthorized'] = $this->crossAccountAuthorized;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterName) {
            $res['TransitRouterName'] = $this->transitRouterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnAttachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachType'])) {
            $model->attachType = $map['AttachType'];
        }
        if (isset($map['CrossAccountAuthorized'])) {
            $model->crossAccountAuthorized = $map['CrossAccountAuthorized'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
        }

        return $model;
    }
}
