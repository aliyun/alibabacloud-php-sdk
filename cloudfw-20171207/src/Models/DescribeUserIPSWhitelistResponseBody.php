<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistResponseBody\ipv6Whitelists;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistResponseBody\whitelists;
use AlibabaCloud\Tea\Model;

class DescribeUserIPSWhitelistResponseBody extends Model
{
    /**
     * @var ipv6Whitelists[]
     */
    public $ipv6Whitelists;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var whitelists[]
     */
    public $whitelists;
    protected $_name = [
        'ipv6Whitelists' => 'Ipv6Whitelists',
        'requestId'      => 'RequestId',
        'whitelists'     => 'Whitelists',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Whitelists) {
            $res['Ipv6Whitelists'] = [];
            if (null !== $this->ipv6Whitelists && \is_array($this->ipv6Whitelists)) {
                $n = 0;
                foreach ($this->ipv6Whitelists as $item) {
                    $res['Ipv6Whitelists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
     * @return DescribeUserIPSWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Whitelists'])) {
            if (!empty($map['Ipv6Whitelists'])) {
                $model->ipv6Whitelists = [];
                $n                     = 0;
                foreach ($map['Ipv6Whitelists'] as $item) {
                    $model->ipv6Whitelists[$n++] = null !== $item ? ipv6Whitelists::fromMap($item) : $item;
                }
            }
        }
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
