<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\BatchModifyEntitlementResponseBody\entitlements;

class BatchModifyEntitlementResponseBody extends Model
{
    /**
     * @var entitlements
     */
    public $entitlements;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entitlements' => 'Entitlements',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->entitlements) {
            $this->entitlements->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entitlements) {
            $res['Entitlements'] = null !== $this->entitlements ? $this->entitlements->toArray($noStream) : $this->entitlements;
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
        if (isset($map['Entitlements'])) {
            $model->entitlements = entitlements::fromMap($map['Entitlements']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
