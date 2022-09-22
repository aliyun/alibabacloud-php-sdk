<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeRiUtilizationResponseBody\utilizations;
use AlibabaCloud\Tea\Model;

class DescribeRiUtilizationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var utilizations
     */
    public $utilizations;
    protected $_name = [
        'requestId'    => 'RequestId',
        'utilizations' => 'Utilizations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->utilizations) {
            $res['Utilizations'] = null !== $this->utilizations ? $this->utilizations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRiUtilizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Utilizations'])) {
            $model->utilizations = utilizations::fromMap($map['Utilizations']);
        }

        return $model;
    }
}
