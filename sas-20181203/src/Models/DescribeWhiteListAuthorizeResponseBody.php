<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeWhiteListAuthorizeResponseBody extends Model
{
    /**
     * @var int
     */
    public $availableAuthorizeNum;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableAuthorizeNum' => 'AvailableAuthorizeNum',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableAuthorizeNum) {
            $res['AvailableAuthorizeNum'] = $this->availableAuthorizeNum;
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
        if (isset($map['AvailableAuthorizeNum'])) {
            $model->availableAuthorizeNum = $map['AvailableAuthorizeNum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
