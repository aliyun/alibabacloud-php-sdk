<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditResultDetailResponseBody\AIAuditResultDetail;

class GetAuditResultDetailResponseBody extends Model
{
    /**
     * @var AIAuditResultDetail
     */
    public $AIAuditResultDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIAuditResultDetail' => 'AIAuditResultDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIAuditResultDetail) {
            $this->AIAuditResultDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAuditResultDetail) {
            $res['AIAuditResultDetail'] = null !== $this->AIAuditResultDetail ? $this->AIAuditResultDetail->toArray($noStream) : $this->AIAuditResultDetail;
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
        if (isset($map['AIAuditResultDetail'])) {
            $model->AIAuditResultDetail = AIAuditResultDetail::fromMap($map['AIAuditResultDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
