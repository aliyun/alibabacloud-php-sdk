<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallIPSWhitelistResponseBody\whitelists;
use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallIPSWhitelistResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example B5EE02F9-4F21-56CA-AA49-F9F8D69483C1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the IPS whitelist of the VPC firewall.
     *
     * @var whitelists[]
     */
    public $whitelists;
    protected $_name = [
        'requestId'  => 'RequestId',
        'whitelists' => 'Whitelists',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->whitelists) {
            $res['Whitelists'] = [];
            if (null !== $this->whitelists && \is_array($this->whitelists)) {
                $n = 0;
                foreach ($this->whitelists as $item) {
                    $res['Whitelists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallIPSWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Whitelists'])) {
            if (!empty($map['Whitelists'])) {
                $model->whitelists = [];
                $n                 = 0;
                foreach ($map['Whitelists'] as $item) {
                    $model->whitelists[$n++] = null !== $item ? whitelists::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
