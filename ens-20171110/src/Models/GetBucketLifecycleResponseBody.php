<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponseBody\rule;

class GetBucketLifecycleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rule[]
     */
    public $rule;
    protected $_name = [
        'requestId' => 'RequestId',
        'rule' => 'Rule',
    ];

    public function validate()
    {
        if (\is_array($this->rule)) {
            Model::validateArray($this->rule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rule) {
            if (\is_array($this->rule)) {
                $res['Rule'] = [];
                $n1 = 0;
                foreach ($this->rule as $item1) {
                    $res['Rule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rule = [];
                $n1 = 0;
                foreach ($map['Rule'] as $item1) {
                    $model->rule[$n1] = rule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
