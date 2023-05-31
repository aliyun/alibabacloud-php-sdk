<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoDelConfigResponseBody extends Model
{
    /**
     * @description The number of days during which a detected vulnerability is retained before the vulnerability is automatically deleted.
     *
     * @example 30
     *
     * @var int
     */
    public $days;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C56F66FD-C4EE-4813-ABDC-4FF94B6C384E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'days'      => 'Days',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
