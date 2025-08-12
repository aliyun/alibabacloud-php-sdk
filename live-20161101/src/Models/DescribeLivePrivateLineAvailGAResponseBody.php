<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAvailGAResponseBody\livePrivateLineAvailGAs;

class DescribeLivePrivateLineAvailGAResponseBody extends Model
{
    /**
     * @var livePrivateLineAvailGAs
     */
    public $livePrivateLineAvailGAs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'livePrivateLineAvailGAs' => 'LivePrivateLineAvailGAs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->livePrivateLineAvailGAs) {
            $this->livePrivateLineAvailGAs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livePrivateLineAvailGAs) {
            $res['LivePrivateLineAvailGAs'] = null !== $this->livePrivateLineAvailGAs ? $this->livePrivateLineAvailGAs->toArray($noStream) : $this->livePrivateLineAvailGAs;
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
        if (isset($map['LivePrivateLineAvailGAs'])) {
            $model->livePrivateLineAvailGAs = livePrivateLineAvailGAs::fromMap($map['LivePrivateLineAvailGAs']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
