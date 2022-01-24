<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskResponseBody\apiUpdateBackendResults;
use AlibabaCloud\Tea\Model;

class DescribeUpdateBackendTaskResponseBody extends Model
{
    /**
     * @var apiUpdateBackendResults
     */
    public $apiUpdateBackendResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiUpdateBackendResults' => 'ApiUpdateBackendResults',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiUpdateBackendResults) {
            $res['ApiUpdateBackendResults'] = null !== $this->apiUpdateBackendResults ? $this->apiUpdateBackendResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpdateBackendTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiUpdateBackendResults'])) {
            $model->apiUpdateBackendResults = apiUpdateBackendResults::fromMap($map['ApiUpdateBackendResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
