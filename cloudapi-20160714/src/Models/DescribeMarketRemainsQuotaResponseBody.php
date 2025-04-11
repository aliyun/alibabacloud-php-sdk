<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class DescribeMarketRemainsQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $remainsQuota;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remainsQuota' => 'RemainsQuota',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remainsQuota) {
            $res['RemainsQuota'] = $this->remainsQuota;
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
        if (isset($map['RemainsQuota'])) {
            $model->remainsQuota = $map['RemainsQuota'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
