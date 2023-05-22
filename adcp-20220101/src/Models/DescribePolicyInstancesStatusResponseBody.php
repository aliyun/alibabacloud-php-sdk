<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\SDK\Adcp\V20220101\Models\DescribePolicyInstancesStatusResponseBody\policies;
use AlibabaCloud\Tea\Model;

class DescribePolicyInstancesStatusResponseBody extends Model
{
    /**
     * @description The number of policy instances of each policy type.
     *
     * @var policies
     */
    public $policies;

    /**
     * @description The request ID.
     *
     * @example 5D89C59A-A7EB-5BF8-B094-6479175346CA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policies'  => 'Policies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policies) {
            $res['Policies'] = null !== $this->policies ? $this->policies->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyInstancesStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policies'])) {
            $model->policies = policies::fromMap($map['Policies']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
