<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;

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
        'errorCode' => 'ErrorCode',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
