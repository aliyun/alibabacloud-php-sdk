<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnFullDomainsBlockIPConfigResponseBody extends Model
{
    /**
     * @description The response code.
     *
     * The value of Code is not 0 in the following scenarios:
     *
     *   The format of the IP address is invalid.
     *   The number of IP addresses exceeds the limit.
     *   Other abnormal scenarios
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned results. If the operation is successful, URLs of OSS objects are returned. If the operation fails, an error message is returned.
     *
     * @example http://xxxx-api.oss-cn-hangzhou.aliyuncs.com/blocklist%2Fxxxxxxxxxxxx.txt?Expires=1682663947&OSSAccessKeyId=xxxxxxxxxx&Signature=xxxxxx
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 0C58632F-BA12-1A1E-986D-09285752B42C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnFullDomainsBlockIPConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
