<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoDNAResultResponseBody\AIVideoDNAResult;

class GetVideoDNAResultResponseBody extends Model
{
    /**
     * @var AIVideoDNAResult
     */
    public $AIVideoDNAResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoDNAResult' => 'AIVideoDNAResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoDNAResult) {
            $this->AIVideoDNAResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoDNAResult) {
            $res['AIVideoDNAResult'] = null !== $this->AIVideoDNAResult ? $this->AIVideoDNAResult->toArray($noStream) : $this->AIVideoDNAResult;
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
        if (isset($map['AIVideoDNAResult'])) {
            $model->AIVideoDNAResult = AIVideoDNAResult::fromMap($map['AIVideoDNAResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
