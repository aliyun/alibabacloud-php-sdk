<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeIspFlushCacheRemainQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $telecomRemainQuota;
    protected $_name = [
        'requestId'          => 'RequestId',
        'telecomRemainQuota' => 'TelecomRemainQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->telecomRemainQuota) {
            $res['TelecomRemainQuota'] = $this->telecomRemainQuota;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TelecomRemainQuota'])) {
            $model->telecomRemainQuota = $map['TelecomRemainQuota'];
        }

        return $model;
    }
}
