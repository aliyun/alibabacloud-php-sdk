<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsResourceUsageResponseBody\ensResourceUsage;

class DescribeEnsResourceUsageResponseBody extends Model
{
    /**
     * @var ensResourceUsage[]
     */
    public $ensResourceUsage;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ensResourceUsage' => 'EnsResourceUsage',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ensResourceUsage)) {
            Model::validateArray($this->ensResourceUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensResourceUsage) {
            if (\is_array($this->ensResourceUsage)) {
                $res['EnsResourceUsage'] = [];
                $n1 = 0;
                foreach ($this->ensResourceUsage as $item1) {
                    $res['EnsResourceUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnsResourceUsage'])) {
            if (!empty($map['EnsResourceUsage'])) {
                $model->ensResourceUsage = [];
                $n1 = 0;
                foreach ($map['EnsResourceUsage'] as $item1) {
                    $model->ensResourceUsage[$n1] = ensResourceUsage::fromMap($item1);
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
