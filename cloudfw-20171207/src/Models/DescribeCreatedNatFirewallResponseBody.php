<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeCreatedNatFirewallResponseBody\createdNatFirewalls;

class DescribeCreatedNatFirewallResponseBody extends Model
{
    /**
     * @var createdNatFirewalls[]
     */
    public $createdNatFirewalls;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'createdNatFirewalls' => 'CreatedNatFirewalls',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->createdNatFirewalls)) {
            Model::validateArray($this->createdNatFirewalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdNatFirewalls) {
            if (\is_array($this->createdNatFirewalls)) {
                $res['CreatedNatFirewalls'] = [];
                $n1 = 0;
                foreach ($this->createdNatFirewalls as $item1) {
                    $res['CreatedNatFirewalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreatedNatFirewalls'])) {
            if (!empty($map['CreatedNatFirewalls'])) {
                $model->createdNatFirewalls = [];
                $n1 = 0;
                foreach ($map['CreatedNatFirewalls'] as $item1) {
                    $model->createdNatFirewalls[$n1] = createdNatFirewalls::fromMap($item1);
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
