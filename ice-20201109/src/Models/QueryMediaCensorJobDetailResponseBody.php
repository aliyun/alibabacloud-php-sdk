<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;

class QueryMediaCensorJobDetailResponseBody extends Model
{
    /**
     * @var mediaCensorJobDetail
     */
    public $mediaCensorJobDetail;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaCensorJobDetail' => 'MediaCensorJobDetail',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaCensorJobDetail) {
            $this->mediaCensorJobDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaCensorJobDetail) {
            $res['MediaCensorJobDetail'] = null !== $this->mediaCensorJobDetail ? $this->mediaCensorJobDetail->toArray($noStream) : $this->mediaCensorJobDetail;
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
        if (isset($map['MediaCensorJobDetail'])) {
            $model->mediaCensorJobDetail = mediaCensorJobDetail::fromMap($map['MediaCensorJobDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
