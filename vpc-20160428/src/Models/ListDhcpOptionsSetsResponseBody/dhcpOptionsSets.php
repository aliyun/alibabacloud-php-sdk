<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets\dhcpOptions;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets\tags;
use AlibabaCloud\Tea\Model;

class dhcpOptionsSets extends Model
{
    /**
     * @description The number of VPCs with which the DHCP options set is associated.
     *
     * @example 2
     *
     * @var int
     */
    public $associateVpcCount;

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
     * @example 253460731706911258
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group to which the DHCP options set belongs.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the DHCP options set. Valid values:
     *
     *   **Available**
     *   **InUse**
     *   **Pending**
     *   **Deleted**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'associateVpcCount'         => 'AssociateVpcCount',
        'dhcpOptions'               => 'DhcpOptions',
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
        'dhcpOptionsSetId'          => 'DhcpOptionsSetId',
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'ownerId'                   => 'OwnerId',
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
        if (null !== $this->associateVpcCount) {
            $res['AssociateVpcCount'] = $this->associateVpcCount;
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
     * @return dhcpOptionsSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateVpcCount'])) {
            $model->associateVpcCount = $map['AssociateVpcCount'];
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
