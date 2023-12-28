<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\SDK\Oosops\V20190601\Models\GetQuotaResponseBody\quota;
use AlibabaCloud\Tea\Model;

class GetQuotaResponseBody extends Model
{
    /**
     * @var quota
     */
    public $quota;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'quota'     => 'Quota',
        'requestId' => 'RequestId',
        'uid'       => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
