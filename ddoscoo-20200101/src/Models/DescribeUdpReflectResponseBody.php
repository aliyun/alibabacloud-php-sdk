<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeUdpReflectResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $udpSports;
    protected $_name = [
        'requestId' => 'RequestId',
        'udpSports' => 'UdpSports',
    ];

    public function validate()
    {
        if (\is_array($this->udpSports)) {
            Model::validateArray($this->udpSports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->udpSports) {
            if (\is_array($this->udpSports)) {
                $res['UdpSports'] = [];
                $n1 = 0;
                foreach ($this->udpSports as $item1) {
                    $res['UdpSports'][$n1] = $item1;
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

        if (isset($map['UdpSports'])) {
            if (!empty($map['UdpSports'])) {
                $model->udpSports = [];
                $n1 = 0;
                foreach ($map['UdpSports'] as $item1) {
                    $model->udpSports[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
