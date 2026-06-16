<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class GetCaInstanceCrlAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $caInstanceStatus;

    /**
     * @var string
     */
    public $crlUrl;

    /**
     * @var string
     */
    public $hashCode;

    /**
     * @var string
     */
    public $nextUpdateTime;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'caInstanceStatus' => 'CaInstanceStatus',
        'crlUrl' => 'CrlUrl',
        'hashCode' => 'HashCode',
        'nextUpdateTime' => 'NextUpdateTime',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caInstanceStatus) {
            $res['CaInstanceStatus'] = $this->caInstanceStatus;
        }

        if (null !== $this->crlUrl) {
            $res['CrlUrl'] = $this->crlUrl;
        }

        if (null !== $this->hashCode) {
            $res['HashCode'] = $this->hashCode;
        }

        if (null !== $this->nextUpdateTime) {
            $res['NextUpdateTime'] = $this->nextUpdateTime;
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
        if (isset($map['CaInstanceStatus'])) {
            $model->caInstanceStatus = $map['CaInstanceStatus'];
        }

        if (isset($map['CrlUrl'])) {
            $model->crlUrl = $map['CrlUrl'];
        }

        if (isset($map['HashCode'])) {
            $model->hashCode = $map['HashCode'];
        }

        if (isset($map['NextUpdateTime'])) {
            $model->nextUpdateTime = $map['NextUpdateTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
