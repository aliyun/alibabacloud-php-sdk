<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail;
use AlibabaCloud\Tea\Model;

class QueryMediaCensorJobDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mediaCensorJobDetail
     */
    public $mediaCensorJobDetail;
    protected $_name = [
        'requestId'            => 'RequestId',
        'mediaCensorJobDetail' => 'MediaCensorJobDetail',
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
        if (null !== $this->mediaCensorJobDetail) {
            $res['MediaCensorJobDetail'] = null !== $this->mediaCensorJobDetail ? $this->mediaCensorJobDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaCensorJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaCensorJobDetail'])) {
            $model->mediaCensorJobDetail = mediaCensorJobDetail::fromMap($map['MediaCensorJobDetail']);
        }

        return $model;
    }
}
