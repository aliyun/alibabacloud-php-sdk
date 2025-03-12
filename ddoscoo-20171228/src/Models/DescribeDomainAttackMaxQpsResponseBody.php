<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainAttackMaxQpsResponseBody extends Model
{
    /**
     * @example 613
     *
     * @var string
     */
    public $qps;

    /**
     * @example 62F9BD81-8BCA-5B23-A3CB-3FB7CEB7A4CA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qps'       => 'Qps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainAttackMaxQpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
