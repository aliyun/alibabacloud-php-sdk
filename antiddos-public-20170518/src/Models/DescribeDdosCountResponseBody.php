<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCountResponseBody\ddosCount;
use AlibabaCloud\Tea\Model;

class DescribeDdosCountResponseBody extends Model
{
    /**
     * @description The number of assets that are under DDoS attacks.
     *
     * @var ddosCount
     */
    public $ddosCount;

    /**
     * @description The ID of the request.
     *
     * @example 7D66C762-324E-51CE-B461-2007996087B2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ddosCount' => 'DdosCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosCount) {
            $res['DdosCount'] = null !== $this->ddosCount ? $this->ddosCount->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosCount'])) {
            $model->ddosCount = ddosCount::fromMap($map['DdosCount']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
