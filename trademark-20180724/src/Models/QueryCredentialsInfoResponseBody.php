<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryCredentialsInfoResponseBody\credentialsInfo;
use AlibabaCloud\Tea\Model;

class QueryCredentialsInfoResponseBody extends Model
{
    /**
     * @var credentialsInfo
     */
    public $credentialsInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'credentialsInfo' => 'CredentialsInfo',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialsInfo) {
            $res['CredentialsInfo'] = null !== $this->credentialsInfo ? $this->credentialsInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCredentialsInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialsInfo'])) {
            $model->credentialsInfo = credentialsInfo::fromMap($map['CredentialsInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
