<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountLimitsResponseBody\accountLimitTypeSet;
use AlibabaCloud\Tea\Model;

class DescribeAccountLimitsResponseBody extends Model
{
    /**
     * @var accountLimitTypeSet
     */
    public $accountLimitTypeSet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountLimitTypeSet' => 'AccountLimitTypeSet',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountLimitTypeSet) {
            $res['AccountLimitTypeSet'] = null !== $this->accountLimitTypeSet ? $this->accountLimitTypeSet->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountLimitsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountLimitTypeSet'])) {
            $model->accountLimitTypeSet = accountLimitTypeSet::fromMap($map['AccountLimitTypeSet']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
