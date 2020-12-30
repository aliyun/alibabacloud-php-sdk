<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponseBody\dhcpOptionsSets\dhcpOptions;
use AlibabaCloud\Tea\Model;

class dhcpOptionsSets extends Model
{
    /**
     * @var string
     */
    public $dhcpOptionsSetDescription;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @var dhcpOptions
     */
    public $dhcpOptions;

    /**
     * @var string
     */
    public $dhcpOptionsSetName;

    /**
     * @var int
     */
    public $associateVpcCount;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
        'status'                    => 'Status',
        'dhcpOptionsSetId'          => 'DhcpOptionsSetId',
        'dhcpOptions'               => 'DhcpOptions',
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'associateVpcCount'         => 'AssociateVpcCount',
        'ownerId'                   => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dhcpOptionsSetDescription) {
            $res['DhcpOptionsSetDescription'] = $this->dhcpOptionsSetDescription;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->dhcpOptions) {
            $res['DhcpOptions'] = null !== $this->dhcpOptions ? $this->dhcpOptions->toMap() : null;
        }
        if (null !== $this->dhcpOptionsSetName) {
            $res['DhcpOptionsSetName'] = $this->dhcpOptionsSetName;
        }
        if (null !== $this->associateVpcCount) {
            $res['AssociateVpcCount'] = $this->associateVpcCount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['DhcpOptionsSetDescription'])) {
            $model->dhcpOptionsSetDescription = $map['DhcpOptionsSetDescription'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['DhcpOptions'])) {
            $model->dhcpOptions = dhcpOptions::fromMap($map['DhcpOptions']);
        }
        if (isset($map['DhcpOptionsSetName'])) {
            $model->dhcpOptionsSetName = $map['DhcpOptionsSetName'];
        }
        if (isset($map['AssociateVpcCount'])) {
            $model->associateVpcCount = $map['AssociateVpcCount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
