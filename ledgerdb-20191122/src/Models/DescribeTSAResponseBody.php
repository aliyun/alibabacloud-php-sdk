<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeTSAResponseBody\TSADetail;
use AlibabaCloud\Tea\Model;

class DescribeTSAResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var TSADetail
     */
    public $TSADetail;
    protected $_name = [
        'requestId' => 'RequestId',
        'TSADetail' => 'TSADetail',
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
        if (null !== $this->TSADetail) {
            $res['TSADetail'] = null !== $this->TSADetail ? $this->TSADetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTSAResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TSADetail'])) {
            $model->TSADetail = TSADetail::fromMap($map['TSADetail']);
        }

        return $model;
    }
}
