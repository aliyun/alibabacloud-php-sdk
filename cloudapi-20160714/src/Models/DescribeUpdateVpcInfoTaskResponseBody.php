<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponseBody\apiUpdateVpcInfoResults;

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
        if (null !== $this->apiUpdateVpcInfoResults) {
            $this->apiUpdateVpcInfoResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiUpdateVpcInfoResults) {
            $res['ApiUpdateVpcInfoResults'] = null !== $this->apiUpdateVpcInfoResults ? $this->apiUpdateVpcInfoResults->toArray($noStream) : $this->apiUpdateVpcInfoResults;
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
        if (isset($map['ApiUpdateVpcInfoResults'])) {
            $model->apiUpdateVpcInfoResults = apiUpdateVpcInfoResults::fromMap($map['ApiUpdateVpcInfoResults']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
