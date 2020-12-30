<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody\associateVpcs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody\dhcpOptions;
use AlibabaCloud\Tea\Model;

class GetDhcpOptionsSetResponseBody extends Model
{
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
    public $requestId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $dhcpOptionsSetName;

    /**
     * @var associateVpcs[]
     */
    public $associateVpcs;

    /**
     * @var string
     */
    public $dhcpOptionsSetDescription;
    protected $_name = [
        'status'                    => 'Status',
        'dhcpOptionsSetId'          => 'DhcpOptionsSetId',
        'dhcpOptions'               => 'DhcpOptions',
        'requestId'                 => 'RequestId',
        'ownerId'                   => 'OwnerId',
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'associateVpcs'             => 'AssociateVpcs',
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->dhcpOptions) {
            $res['DhcpOptions'] = null !== $this->dhcpOptions ? $this->dhcpOptions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->dhcpOptionsSetName) {
            $res['DhcpOptionsSetName'] = $this->dhcpOptionsSetName;
        }
        if (null !== $this->associateVpcs) {
            $res['AssociateVpcs'] = [];
            if (null !== $this->associateVpcs && \is_array($this->associateVpcs)) {
                $n = 0;
                foreach ($this->associateVpcs as $item) {
                    $res['AssociateVpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dhcpOptionsSetDescription) {
            $res['DhcpOptionsSetDescription'] = $this->dhcpOptionsSetDescription;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['DhcpOptions'])) {
            $model->dhcpOptions = dhcpOptions::fromMap($map['DhcpOptions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DhcpOptionsSetName'])) {
            $model->dhcpOptionsSetName = $map['DhcpOptionsSetName'];
        }
        if (isset($map['AssociateVpcs'])) {
            if (!empty($map['AssociateVpcs'])) {
                $model->associateVpcs = [];
                $n                    = 0;
                foreach ($map['AssociateVpcs'] as $item) {
                    $model->associateVpcs[$n++] = null !== $item ? associateVpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DhcpOptionsSetDescription'])) {
            $model->dhcpOptionsSetDescription = $map['DhcpOptionsSetDescription'];
        }

        return $model;
    }
}
