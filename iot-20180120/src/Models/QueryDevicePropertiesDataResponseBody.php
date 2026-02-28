<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody\propertyDataInfos;

class QueryDevicePropertiesDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $nextTime;

    /**
     * @var bool
     */
    public $nextValid;

    /**
     * @var propertyDataInfos
     */
    public $propertyDataInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'errorMessage' => 'ErrorMessage',
        'nextTime' => 'NextTime',
        'nextValid' => 'NextValid',
        'propertyDataInfos' => 'PropertyDataInfos',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->propertyDataInfos) {
            $this->propertyDataInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->nextTime) {
            $res['NextTime'] = $this->nextTime;
        }

        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
        }

        if (null !== $this->propertyDataInfos) {
            $res['PropertyDataInfos'] = null !== $this->propertyDataInfos ? $this->propertyDataInfos->toArray($noStream) : $this->propertyDataInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['NextTime'])) {
            $model->nextTime = $map['NextTime'];
        }

        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }

        if (isset($map['PropertyDataInfos'])) {
            $model->propertyDataInfos = propertyDataInfos::fromMap($map['PropertyDataInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
