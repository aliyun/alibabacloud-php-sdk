<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponseBody\apiUpdateVpcInfoResults;
use AlibabaCloud\Tea\Model;

class DescribeUpdateVpcInfoTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var apiUpdateVpcInfoResults
     */
    public $apiUpdateVpcInfoResults;
    protected $_name = [
        'requestId'               => 'RequestId',
        'apiUpdateVpcInfoResults' => 'ApiUpdateVpcInfoResults',
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
        if (null !== $this->apiUpdateVpcInfoResults) {
            $res['ApiUpdateVpcInfoResults'] = null !== $this->apiUpdateVpcInfoResults ? $this->apiUpdateVpcInfoResults->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApiUpdateVpcInfoResults'])) {
            $model->apiUpdateVpcInfoResults = apiUpdateVpcInfoResults::fromMap($map['ApiUpdateVpcInfoResults']);
        }

        return $model;
    }
}
