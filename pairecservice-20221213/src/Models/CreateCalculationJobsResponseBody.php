<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateCalculationJobsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $calculationJobIds;

    /**
     * @example 8C27790E-CCA5-56BB-BA17-646295DEC0A2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'calculationJobIds' => 'CalculationJobIds',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calculationJobIds) {
            $res['CalculationJobIds'] = $this->calculationJobIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCalculationJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalculationJobIds'])) {
            if (!empty($map['CalculationJobIds'])) {
                $model->calculationJobIds = $map['CalculationJobIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
