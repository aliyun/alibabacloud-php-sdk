<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateCalculationJobsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $calculationJobIds;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'calculationJobIds' => 'CalculationJobIds',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->calculationJobIds)) {
            Model::validateArray($this->calculationJobIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calculationJobIds) {
            if (\is_array($this->calculationJobIds)) {
                $res['CalculationJobIds'] = [];
                $n1                       = 0;
                foreach ($this->calculationJobIds as $item1) {
                    $res['CalculationJobIds'][$n1++] = $item1;
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
        if (isset($map['CalculationJobIds'])) {
            if (!empty($map['CalculationJobIds'])) {
                $model->calculationJobIds = [];
                $n1                       = 0;
                foreach ($map['CalculationJobIds'] as $item1) {
                    $model->calculationJobIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
