<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class ResetUserPasswordResponseBody extends Model
{
    /**
     * @description The new password.
     *
     * >  This parameter is returned only when the new password is automatically generated by the system.
     * @example W2koInFIm0Wy2wVZ$oB)MzD$nY!G****
     *
     * @var string
     */
    public $newPassword;

    /**
     * @description The ID of the request.
     *
     * @example F44F02EC-70D1-5E51-8E8E-FA9AC4EF952A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'newPassword' => 'NewPassword',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newPassword) {
            $res['NewPassword'] = $this->newPassword;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetUserPasswordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewPassword'])) {
            $model->newPassword = $map['NewPassword'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
