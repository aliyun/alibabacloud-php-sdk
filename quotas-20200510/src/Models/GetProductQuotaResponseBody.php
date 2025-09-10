<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota;

class GetProductQuotaResponseBody extends Model
{
    /**
     * @var quota
     */
    public $quota;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quota' => 'Quota',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->quota) {
            $this->quota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
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
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
