<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponseBody\apiAbolishResults;
use AlibabaCloud\Tea\Model;

class DescribeAbolishApiTaskResponseBody extends Model
{
    /**
     * @var apiAbolishResults
     */
    public $apiAbolishResults;

    /**
     * @example E8515BA6-81CD-4191-A7CF-C4FCDD3C0D99
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiAbolishResults' => 'ApiAbolishResults',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiAbolishResults) {
            $res['ApiAbolishResults'] = null !== $this->apiAbolishResults ? $this->apiAbolishResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAbolishApiTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiAbolishResults'])) {
            $model->apiAbolishResults = apiAbolishResults::fromMap($map['ApiAbolishResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
