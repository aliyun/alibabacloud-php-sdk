<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedResponseBody\accessKeyLastUsed;
use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedResponseBody extends Model
{
    /**
     * @description The details of the time when the AccessKey pair was used for the last time.
     *
     * @var accessKeyLastUsed
     */
    public $accessKeyLastUsed;

    /**
     * @description The request ID.
     *
     * @example B29C79F6-354B-4297-A994-1338CC22A2EC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKeyLastUsed' => 'AccessKeyLastUsed',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyLastUsed) {
            $res['AccessKeyLastUsed'] = null !== $this->accessKeyLastUsed ? $this->accessKeyLastUsed->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyLastUsed'])) {
            $model->accessKeyLastUsed = accessKeyLastUsed::fromMap($map['AccessKeyLastUsed']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
