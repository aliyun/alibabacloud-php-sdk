<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortMaxConnsResponseBody\portMaxConns;

class DescribePortMaxConnsResponseBody extends Model
{
    /**
     * @var portMaxConns[]
     */
    public $portMaxConns;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'portMaxConns' => 'PortMaxConns',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->portMaxConns)) {
            Model::validateArray($this->portMaxConns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->portMaxConns) {
            if (\is_array($this->portMaxConns)) {
                $res['PortMaxConns'] = [];
                $n1                  = 0;
                foreach ($this->portMaxConns as $item1) {
                    $res['PortMaxConns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PortMaxConns'])) {
            if (!empty($map['PortMaxConns'])) {
                $model->portMaxConns = [];
                $n1                  = 0;
                foreach ($map['PortMaxConns'] as $item1) {
                    $model->portMaxConns[$n1++] = portMaxConns::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
