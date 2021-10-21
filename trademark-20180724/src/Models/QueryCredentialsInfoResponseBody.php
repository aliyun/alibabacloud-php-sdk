<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryCredentialsInfoResponseBody\credentialsInfo;
use AlibabaCloud\Tea\Model;

class QueryCredentialsInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var credentialsInfo
     */
    public $credentialsInfo;
    protected $_name = [
        'requestId'       => 'RequestId',
        'credentialsInfo' => 'CredentialsInfo',
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
        if (null !== $this->credentialsInfo) {
            $res['CredentialsInfo'] = null !== $this->credentialsInfo ? $this->credentialsInfo->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CredentialsInfo'])) {
            $model->credentialsInfo = credentialsInfo::fromMap($map['CredentialsInfo']);
        }

        return $model;
    }
}
