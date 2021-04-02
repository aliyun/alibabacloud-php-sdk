<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetAccountMFAInfoResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isMFAEnable;
    protected $_name = [
        'requestId'   => 'RequestId',
        'isMFAEnable' => 'IsMFAEnable',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isMFAEnable', $this->isMFAEnable, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isMFAEnable) {
            $res['IsMFAEnable'] = $this->isMFAEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountMFAInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsMFAEnable'])) {
            $model->isMFAEnable = $map['IsMFAEnable'];
        }

        return $model;
    }
}
