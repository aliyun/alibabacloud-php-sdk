<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota;
use AlibabaCloud\Tea\Model;

class GetProductQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var quota
     */
    public $quota;
    protected $_name = [
        'requestId' => 'RequestId',
        'quota'     => 'Quota',
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
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }

        return $model;
    }
}
