<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefensePoliciesResponseBody\policies;

class DescribeSceneDefensePoliciesResponseBody extends Model
{
    /**
     * @var policies[]
     */
    public $policies;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'policies'  => 'Policies',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->policies)) {
            Model::validateArray($this->policies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policies) {
            if (\is_array($this->policies)) {
                $res['Policies'] = [];
                $n1              = 0;
                foreach ($this->policies as $item1) {
                    $res['Policies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n1              = 0;
                foreach ($map['Policies'] as $item1) {
                    $model->policies[$n1++] = policies::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
