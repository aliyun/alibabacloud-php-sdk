<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetKvDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $expirationTtl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'expirationTtl' => 'ExpirationTtl',
        'requestId' => 'RequestId',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expirationTtl) {
            $res['ExpirationTtl'] = $this->expirationTtl;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['ExpirationTtl'])) {
            $model->expirationTtl = $map['ExpirationTtl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
