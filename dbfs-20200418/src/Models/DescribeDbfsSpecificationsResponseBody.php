<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class DescribeDbfsSpecificationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $supportedEcsInstanceTypeFamily;

    /**
     * @var mixed[]
     */
    public $maxDbfsNumberPerEcs;
    protected $_name = [
        'requestId'                      => 'RequestId',
        'supportedEcsInstanceTypeFamily' => 'SupportedEcsInstanceTypeFamily',
        'maxDbfsNumberPerEcs'            => 'MaxDbfsNumberPerEcs',
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
        if (null !== $this->supportedEcsInstanceTypeFamily) {
            $res['SupportedEcsInstanceTypeFamily'] = $this->supportedEcsInstanceTypeFamily;
        }
        if (null !== $this->maxDbfsNumberPerEcs) {
            $res['MaxDbfsNumberPerEcs'] = $this->maxDbfsNumberPerEcs;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportedEcsInstanceTypeFamily'])) {
            if (!empty($map['SupportedEcsInstanceTypeFamily'])) {
                $model->supportedEcsInstanceTypeFamily = $map['SupportedEcsInstanceTypeFamily'];
            }
        }
        if (isset($map['MaxDbfsNumberPerEcs'])) {
            $model->maxDbfsNumberPerEcs = $map['MaxDbfsNumberPerEcs'];
        }

        return $model;
    }
}
