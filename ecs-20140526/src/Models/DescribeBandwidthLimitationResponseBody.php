<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponseBody\bandwidths;

class DescribeBandwidthLimitationResponseBody extends Model
{
    /**
     * @var bandwidths
     */
    public $bandwidths;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidths' => 'Bandwidths',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->bandwidths) {
            $this->bandwidths->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidths) {
            $res['Bandwidths'] = null !== $this->bandwidths ? $this->bandwidths->toArray($noStream) : $this->bandwidths;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidths'])) {
            $model->bandwidths = bandwidths::fromMap($map['Bandwidths']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
