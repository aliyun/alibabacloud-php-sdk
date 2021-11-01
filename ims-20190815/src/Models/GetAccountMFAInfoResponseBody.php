<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetAccountMFAInfoResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isMFAEnable;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isMFAEnable' => 'IsMFAEnable',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isMFAEnable) {
            $res['IsMFAEnable'] = $this->isMFAEnable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountMFAInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsMFAEnable'])) {
            $model->isMFAEnable = $map['IsMFAEnable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
