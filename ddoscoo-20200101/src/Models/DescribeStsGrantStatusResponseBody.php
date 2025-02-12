<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeStsGrantStatusResponseBody\stsGrant;

class DescribeStsGrantStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var stsGrant
     */
    public $stsGrant;
    protected $_name = [
        'requestId' => 'RequestId',
        'stsGrant'  => 'StsGrant',
    ];

    public function validate()
    {
        if (null !== $this->stsGrant) {
            $this->stsGrant->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stsGrant) {
            $res['StsGrant'] = null !== $this->stsGrant ? $this->stsGrant->toArray($noStream) : $this->stsGrant;
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

        if (isset($map['StsGrant'])) {
            $model->stsGrant = stsGrant::fromMap($map['StsGrant']);
        }

        return $model;
    }
}
