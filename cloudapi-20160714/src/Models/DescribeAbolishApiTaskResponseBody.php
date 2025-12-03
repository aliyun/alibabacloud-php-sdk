<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponseBody\apiAbolishResults;

class DescribeAbolishApiTaskResponseBody extends Model
{
    /**
     * @var apiAbolishResults
     */
    public $apiAbolishResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiAbolishResults' => 'ApiAbolishResults',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->apiAbolishResults) {
            $this->apiAbolishResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiAbolishResults) {
            $res['ApiAbolishResults'] = null !== $this->apiAbolishResults ? $this->apiAbolishResults->toArray($noStream) : $this->apiAbolishResults;
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
        if (isset($map['ApiAbolishResults'])) {
            $model->apiAbolishResults = apiAbolishResults::fromMap($map['ApiAbolishResults']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
