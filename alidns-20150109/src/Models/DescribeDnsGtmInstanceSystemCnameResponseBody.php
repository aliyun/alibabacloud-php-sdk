<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDnsGtmInstanceSystemCnameResponseBody extends Model
{
    /**
     * @var string
     */
    public $systemCname;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'systemCname' => 'SystemCname',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemCname) {
            $res['SystemCname'] = $this->systemCname;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmInstanceSystemCnameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemCname'])) {
            $model->systemCname = $map['SystemCname'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
