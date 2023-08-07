<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody\associateVpcs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody\dhcpOptions;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetDhcpOptionsSetResponseBody extends Model
{
    /**
     * @description The information about the virtual private cloud (VPC) that is associated with the DHCP options set.
     *
     * @var associateVpcs[]
     */
    public $associateVpcs;

    /**
     * @description The configuration information about the DHCP options set.
     *
     * @var dhcpOptions
     */
    public $dhcpOptions;

    /**
     * @description The description of the DHCP options set.
     *
     * @example test
     *
     * @var string
     */
    public $dhcpOptionsSetDescription;

    /**
     * @description The ID of the DHCP options set.
     *
     * @example dopt-o6w0df4epg9zo8isy****
     *
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @description The name of the DHCP options set.
     *
     * @example test
     *
     * @var string
     */
    public $dhcpOptionsSetName;

    /**
     * @description The ID of the Alibaba Cloud account to which the DHCP options set belongs.
     *
     * @example 283117732402483989
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the request.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the DHCP options set. Valid values:
     *
     *   **Available**: available
     *   **InUse**: in use
     *   **Deleted**: deleted
     *   **Pending**: being configured
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'associateVpcs'             => 'AssociateVpcs',
        'dhcpOptions'               => 'DhcpOptions',
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
        'dhcpOptionsSetId'          => 'DhcpOptionsSetId',
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'ownerId'                   => 'OwnerId',
        'requestId'                 => 'RequestId',
        'resourceGroupId'           => 'ResourceGroupId',
        'status'                    => 'Status',
        'tags'                      => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateVpcs) {
            $res['AssociateVpcs'] = [];
            if (null !== $this->associateVpcs && \is_array($this->associateVpcs)) {
                $n = 0;
                foreach ($this->associateVpcs as $item) {
                    $res['AssociateVpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dhcpOptions) {
            $res['DhcpOptions'] = null !== $this->dhcpOptions ? $this->dhcpOptions->toMap() : null;
        }
        if (null !== $this->dhcpOptionsSetDescription) {
            $res['DhcpOptionsSetDescription'] = $this->dhcpOptionsSetDescription;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->dhcpOptionsSetName) {
            $res['DhcpOptionsSetName'] = $this->dhcpOptionsSetName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDhcpOptionsSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateVpcs'])) {
            if (!empty($map['AssociateVpcs'])) {
                $model->associateVpcs = [];
                $n                    = 0;
                foreach ($map['AssociateVpcs'] as $item) {
                    $model->associateVpcs[$n++] = null !== $item ? associateVpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DhcpOptions'])) {
            $model->dhcpOptions = dhcpOptions::fromMap($map['DhcpOptions']);
        }
        if (isset($map['DhcpOptionsSetDescription'])) {
            $model->dhcpOptionsSetDescription = $map['DhcpOptionsSetDescription'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['DhcpOptionsSetName'])) {
            $model->dhcpOptionsSetName = $map['DhcpOptionsSetName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
