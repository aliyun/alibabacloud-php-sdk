<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistResponseBody\ipv6Whitelists;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserIPSWhitelistResponseBody\whitelists;

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
        'requestId' => 'RequestId',
        'whitelists' => 'Whitelists',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6Whitelists)) {
            Model::validateArray($this->ipv6Whitelists);
        }
        if (\is_array($this->whitelists)) {
            Model::validateArray($this->whitelists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Whitelists) {
            if (\is_array($this->ipv6Whitelists)) {
                $res['Ipv6Whitelists'] = [];
                $n1 = 0;
                foreach ($this->ipv6Whitelists as $item1) {
                    $res['Ipv6Whitelists'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->whitelists) {
            if (\is_array($this->whitelists)) {
                $res['Whitelists'] = [];
                $n1 = 0;
                foreach ($this->whitelists as $item1) {
                    $res['Whitelists'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Whitelists'])) {
            if (!empty($map['Ipv6Whitelists'])) {
                $model->ipv6Whitelists = [];
                $n1 = 0;
                foreach ($map['Ipv6Whitelists'] as $item1) {
                    $model->ipv6Whitelists[$n1++] = ipv6Whitelists::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Whitelists'])) {
            if (!empty($map['Whitelists'])) {
                $model->whitelists = [];
                $n1 = 0;
                foreach ($map['Whitelists'] as $item1) {
                    $model->whitelists[$n1++] = whitelists::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
