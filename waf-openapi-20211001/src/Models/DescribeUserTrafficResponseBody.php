<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserTrafficResponseBody\userTraffic;

class DescribeUserTrafficResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userTraffic[]
     */
    public $userTraffic;
    protected $_name = [
        'requestId' => 'RequestId',
        'userTraffic' => 'UserTraffic',
    ];

    public function validate()
    {
        if (\is_array($this->userTraffic)) {
            Model::validateArray($this->userTraffic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userTraffic) {
            if (\is_array($this->userTraffic)) {
                $res['UserTraffic'] = [];
                $n1 = 0;
                foreach ($this->userTraffic as $item1) {
                    $res['UserTraffic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserTraffic'])) {
            if (!empty($map['UserTraffic'])) {
                $model->userTraffic = [];
                $n1 = 0;
                foreach ($map['UserTraffic'] as $item1) {
                    $model->userTraffic[$n1] = userTraffic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
