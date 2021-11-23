<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class DescribeDbfsSpecificationsResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $maxDbfsNumberPerEcs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $supportedEcsInstanceTypeFamily;
    protected $_name = [
        'maxDbfsNumberPerEcs'            => 'MaxDbfsNumberPerEcs',
        'requestId'                      => 'RequestId',
        'supportedEcsInstanceTypeFamily' => 'SupportedEcsInstanceTypeFamily',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxDbfsNumberPerEcs) {
            $res['MaxDbfsNumberPerEcs'] = $this->maxDbfsNumberPerEcs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportedEcsInstanceTypeFamily) {
            $res['SupportedEcsInstanceTypeFamily'] = $this->supportedEcsInstanceTypeFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDbfsSpecificationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxDbfsNumberPerEcs'])) {
            $model->maxDbfsNumberPerEcs = $map['MaxDbfsNumberPerEcs'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportedEcsInstanceTypeFamily'])) {
            if (!empty($map['SupportedEcsInstanceTypeFamily'])) {
                $model->supportedEcsInstanceTypeFamily = $map['SupportedEcsInstanceTypeFamily'];
            }
        }

        return $model;
    }
}
