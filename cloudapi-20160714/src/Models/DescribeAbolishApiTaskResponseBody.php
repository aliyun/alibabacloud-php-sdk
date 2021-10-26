<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponseBody\apiAbolishResults;
use AlibabaCloud\Tea\Model;

class DescribeAbolishApiTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var apiAbolishResults
     */
    public $apiAbolishResults;
    protected $_name = [
        'requestId'         => 'RequestId',
        'apiAbolishResults' => 'ApiAbolishResults',
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
        if (null !== $this->apiAbolishResults) {
            $res['ApiAbolishResults'] = null !== $this->apiAbolishResults ? $this->apiAbolishResults->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApiAbolishResults'])) {
            $model->apiAbolishResults = apiAbolishResults::fromMap($map['ApiAbolishResults']);
        }

        return $model;
    }
}
