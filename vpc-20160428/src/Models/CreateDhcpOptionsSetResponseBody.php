<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateDhcpOptionsSetResponseBody extends Model
{
    /**
     * @description The ID of the DHCP options set that is created.
     *
     * @example dopt-o6w0df4epg9zo8isy****
     *
     * @var string
     */
    public $dhcpOptionsSetId;

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
    protected $_name = [
        'dhcpOptionsSetId' => 'DhcpOptionsSetId',
        'requestId'        => 'RequestId',
        'resourceGroupId'  => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDhcpOptionsSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
