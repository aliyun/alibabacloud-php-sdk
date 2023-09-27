<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiErrorResponseBody\clientErrors;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiErrorResponseBody\serverErrors;
use AlibabaCloud\Tea\Model;

class DescribeApiErrorResponseBody extends Model
{
    /**
     * @var clientErrors
     */
    public $clientErrors;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serverErrors
     */
    public $serverErrors;
    protected $_name = [
        'clientErrors' => 'ClientErrors',
        'requestId'    => 'RequestId',
        'serverErrors' => 'ServerErrors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientErrors) {
            $res['ClientErrors'] = null !== $this->clientErrors ? $this->clientErrors->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverErrors) {
            $res['ServerErrors'] = null !== $this->serverErrors ? $this->serverErrors->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiErrorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientErrors'])) {
            $model->clientErrors = clientErrors::fromMap($map['ClientErrors']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerErrors'])) {
            $model->serverErrors = serverErrors::fromMap($map['ServerErrors']);
        }

        return $model;
    }
}
