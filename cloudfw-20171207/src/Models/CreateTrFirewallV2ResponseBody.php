<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateTrFirewallV2ResponseBody extends Model
{
    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-tr-37e22bf0d9b34870****
     *
     * @var string
     */
    public $firewallId;

    /**
     * @description The request ID.
     *
     * @example 822B9125-6E1A-551C-8EAF-6E7AE7444B00
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'firewallId' => 'FirewallId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallId) {
            $res['FirewallId'] = $this->firewallId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrFirewallV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallId'])) {
            $model->firewallId = $map['FirewallId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
