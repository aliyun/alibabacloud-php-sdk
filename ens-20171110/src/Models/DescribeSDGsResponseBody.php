<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody\SDGs;

class DescribeSDGsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SDGs[]
     */
    public $SDGs;
    protected $_name = [
        'requestId' => 'RequestId',
        'SDGs' => 'SDGs',
    ];

    public function validate()
    {
        if (\is_array($this->SDGs)) {
            Model::validateArray($this->SDGs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SDGs) {
            if (\is_array($this->SDGs)) {
                $res['SDGs'] = [];
                $n1 = 0;
                foreach ($this->SDGs as $item1) {
                    $res['SDGs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SDGs'])) {
            if (!empty($map['SDGs'])) {
                $model->SDGs = [];
                $n1 = 0;
                foreach ($map['SDGs'] as $item1) {
                    $model->SDGs[$n1] = SDGs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
