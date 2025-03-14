<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainSecureScoreResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 11C96623-E106-59C9-866D-A6C82911****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security score of the website.
     *
     * @example 100
     *
     * @var int
     */
    public $securityScore;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityScore' => 'SecurityScore',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityScore) {
            $res['SecurityScore'] = $this->securityScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSecureScoreResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityScore'])) {
            $model->securityScore = $map['SecurityScore'];
        }

        return $model;
    }
}
