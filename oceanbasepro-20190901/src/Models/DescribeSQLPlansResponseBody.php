<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLPlansResponseBody\SQLPlans;

class DescribeSQLPlansResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SQLPlans[]
     */
    public $SQLPlans;
    protected $_name = [
        'requestId' => 'RequestId',
        'SQLPlans' => 'SQLPlans',
    ];

    public function validate()
    {
        if (\is_array($this->SQLPlans)) {
            Model::validateArray($this->SQLPlans);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SQLPlans) {
            if (\is_array($this->SQLPlans)) {
                $res['SQLPlans'] = [];
                $n1 = 0;
                foreach ($this->SQLPlans as $item1) {
                    $res['SQLPlans'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SQLPlans'])) {
            if (!empty($map['SQLPlans'])) {
                $model->SQLPlans = [];
                $n1 = 0;
                foreach ($map['SQLPlans'] as $item1) {
                    $model->SQLPlans[$n1++] = SQLPlans::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
