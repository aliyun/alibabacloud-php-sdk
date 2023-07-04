<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponseBody;

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
     *   **true**: yes
     *   **false**: no
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
        'attachType'             => 'AttachType',
        'crossAccountAuthorized' => 'CrossAccountAuthorized',
        'description'            => 'Description',
        'instanceId'             => 'InstanceId',
        'name'                   => 'Name',
        'transitRouterId'        => 'TransitRouterId',
        'transitRouterName'      => 'TransitRouterName',
    ];

    public function validate()
    {
    }

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
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
        }

        return $model;
    }
}
