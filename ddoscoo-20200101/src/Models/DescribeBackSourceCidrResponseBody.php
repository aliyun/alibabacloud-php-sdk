<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackSourceCidrResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $cidrs;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cidrs'     => 'Cidrs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cidrs)) {
            Model::validateArray($this->cidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrs) {
            if (\is_array($this->cidrs)) {
                $res['Cidrs'] = [];
                $n1           = 0;
                foreach ($this->cidrs as $item1) {
                    $res['Cidrs'][$n1++] = $item1;
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
        if (isset($map['Cidrs'])) {
            if (!empty($map['Cidrs'])) {
                $model->cidrs = [];
                $n1           = 0;
                foreach ($map['Cidrs'] as $item1) {
                    $model->cidrs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
