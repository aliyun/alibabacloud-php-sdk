<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskResponseBody\apiUpdateBackendResults;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->apiUpdateBackendResults) {
            $this->apiUpdateBackendResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiUpdateBackendResults) {
            $res['ApiUpdateBackendResults'] = null !== $this->apiUpdateBackendResults ? $this->apiUpdateBackendResults->toArray($noStream) : $this->apiUpdateBackendResults;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
