<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRdsDrdsDBResponseBody\rdsDrdsDbs;
use AlibabaCloud\Tea\Model;

class DescribeRdsDrdsDBResponseBody extends Model
{
    /**
     * @var rdsDrdsDbs
     */
    public $rdsDrdsDbs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'rdsDrdsDbs' => 'RdsDrdsDbs',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsDrdsDbs) {
            $res['RdsDrdsDbs'] = null !== $this->rdsDrdsDbs ? $this->rdsDrdsDbs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRdsDrdsDBResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsDrdsDbs'])) {
            $model->rdsDrdsDbs = rdsDrdsDbs::fromMap($map['RdsDrdsDbs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
