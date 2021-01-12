<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\Tea\Model;

class activityInfo extends Model
{
    /**
     * @var string
     */
    public $checkErrMsg;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'checkErrMsg' => 'CheckErrMsg',
        'errorCode'   => 'ErrorCode',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkErrMsg) {
            $res['CheckErrMsg'] = $this->checkErrMsg;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckErrMsg'])) {
            $model->checkErrMsg = $map['CheckErrMsg'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
