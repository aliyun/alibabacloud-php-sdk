<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallAclGroupListResponseBody\natFirewalls;

class DescribeNatFirewallAclGroupListResponseBody extends Model
{
    /**
     * @var natFirewalls[]
     */
    public $natFirewalls;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'natFirewalls' => 'NatFirewalls',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->natFirewalls)) {
            Model::validateArray($this->natFirewalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->natFirewalls) {
            if (\is_array($this->natFirewalls)) {
                $res['NatFirewalls'] = [];
                $n1 = 0;
                foreach ($this->natFirewalls as $item1) {
                    $res['NatFirewalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NatFirewalls'])) {
            if (!empty($map['NatFirewalls'])) {
                $model->natFirewalls = [];
                $n1 = 0;
                foreach ($map['NatFirewalls'] as $item1) {
                    $model->natFirewalls[$n1] = natFirewalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
