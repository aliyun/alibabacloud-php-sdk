<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetAuditConfigResponseBody\audit;
use AlibabaCloud\Tea\Model;

class GetAuditConfigResponseBody extends Model
{
    /**
     * @var audit
     */
    public $audit;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'audit'     => 'Audit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audit) {
            $res['Audit'] = null !== $this->audit ? $this->audit->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audit'])) {
            $model->audit = audit::fromMap($map['Audit']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
