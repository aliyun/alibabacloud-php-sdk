<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiErrorDataResponseBody\clientErrors;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiErrorDataResponseBody\serverErrors;
use AlibabaCloud\Tea\Model;

class DescribeApiErrorDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clientErrors
     */
    public $clientErrors;

    /**
     * @var serverErrors
     */
    public $serverErrors;
    protected $_name = [
        'requestId'    => 'RequestId',
        'clientErrors' => 'ClientErrors',
        'serverErrors' => 'ServerErrors',
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
        if (null !== $this->clientErrors) {
            $res['ClientErrors'] = null !== $this->clientErrors ? $this->clientErrors->toMap() : null;
        }
        if (null !== $this->serverErrors) {
            $res['ServerErrors'] = null !== $this->serverErrors ? $this->serverErrors->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiErrorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClientErrors'])) {
            $model->clientErrors = clientErrors::fromMap($map['ClientErrors']);
        }
        if (isset($map['ServerErrors'])) {
            $model->serverErrors = serverErrors::fromMap($map['ServerErrors']);
        }

        return $model;
    }
}
