<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoDelConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $days;
    protected $_name = [
        'requestId' => 'RequestId',
        'days'      => 'Days',
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
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoDelConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        return $model;
    }
}
