<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponseBody\apiUpdateVpcInfoResults;
use AlibabaCloud\Tea\Model;

class DescribeUpdateVpcInfoTaskResponseBody extends Model
{
    /**
     * @var apiUpdateVpcInfoResults
     */
    public $apiUpdateVpcInfoResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiUpdateVpcInfoResults' => 'ApiUpdateVpcInfoResults',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiUpdateVpcInfoResults) {
            $res['ApiUpdateVpcInfoResults'] = null !== $this->apiUpdateVpcInfoResults ? $this->apiUpdateVpcInfoResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUpdateVpcInfoTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiUpdateVpcInfoResults'])) {
            $model->apiUpdateVpcInfoResults = apiUpdateVpcInfoResults::fromMap($map['ApiUpdateVpcInfoResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
