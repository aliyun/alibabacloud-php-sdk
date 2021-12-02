<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody\associateVpcs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetDhcpOptionsSetResponseBody\dhcpOptions;
use AlibabaCloud\Tea\Model;

class GetDhcpOptionsSetResponseBody extends Model
{
    /**
     * @var associateVpcs[]
     */
    public $associateVpcs;

    /**
     * @var dhcpOptions
     */
    public $dhcpOptions;

    /**
     * @var string
     */
    public $dhcpOptionsSetDescription;

    /**
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @var string
     */
    public $dhcpOptionsSetName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'associateVpcs'             => 'AssociateVpcs',
        'dhcpOptions'               => 'DhcpOptions',
        'dhcpOptionsSetDescription' => 'DhcpOptionsSetDescription',
        'dhcpOptionsSetId'          => 'DhcpOptionsSetId',
        'dhcpOptionsSetName'        => 'DhcpOptionsSetName',
        'ownerId'                   => 'OwnerId',
        'requestId'                 => 'RequestId',
        'status'                    => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
