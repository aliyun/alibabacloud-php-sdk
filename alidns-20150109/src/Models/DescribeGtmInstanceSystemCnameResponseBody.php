<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceSystemCnameResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 6856BCF6-11D6-4D7E-AC53-FD579933522B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The CNAME record assigned by the system.
     *
     * @example gtm-cn-mp91004xxxx.gtm-a2b4.com
     *
     * @var string
     */
    public $systemCname;
    protected $_name = [
        'requestId' => 'RequestId',
        'systemCname' => 'SystemCname',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemCname) {
            $res['SystemCname'] = $this->systemCname;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstanceSystemCnameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemCname'])) {
            $model->systemCname = $map['SystemCname'];
        }

        return $model;
    }
}
