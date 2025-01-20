<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolServiceResponseBody\protocolServices;

class DescribeProtocolServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var protocolServices[]
     */
    public $protocolServices;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'        => 'NextToken',
        'protocolServices' => 'ProtocolServices',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->protocolServices)) {
            Model::validateArray($this->protocolServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->protocolServices) {
            if (\is_array($this->protocolServices)) {
                $res['ProtocolServices'] = [];
                $n1                      = 0;
                foreach ($this->protocolServices as $item1) {
                    $res['ProtocolServices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ProtocolServices'])) {
            if (!empty($map['ProtocolServices'])) {
                $model->protocolServices = [];
                $n1                      = 0;
                foreach ($map['ProtocolServices'] as $item1) {
                    $model->protocolServices[$n1++] = protocolServices::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
