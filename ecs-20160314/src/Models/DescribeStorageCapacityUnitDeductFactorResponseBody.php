<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class DescribeStorageCapacityUnitDeductFactorResponseBody extends Model
{
    /**
     * @var string
     */
    public $deductFactor;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deductFactor' => 'DeductFactor',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deductFactor) {
            $res['DeductFactor'] = $this->deductFactor;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageCapacityUnitDeductFactorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeductFactor'])) {
            $model->deductFactor = $map['DeductFactor'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
