<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody\bandwidths;
use AlibabaCloud\Tea\Model;

class DescribeBandwidthLimitationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bandwidths
     */
    public $bandwidths;
    protected $_name = [
        'requestId'  => 'RequestId',
        'bandwidths' => 'Bandwidths',
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
        if (null !== $this->bandwidths) {
            $res['Bandwidths'] = null !== $this->bandwidths ? $this->bandwidths->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwidthLimitationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Bandwidths'])) {
            $model->bandwidths = bandwidths::fromMap($map['Bandwidths']);
        }

        return $model;
    }
}
