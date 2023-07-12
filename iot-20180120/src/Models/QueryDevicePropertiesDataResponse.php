<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponse\propertyDataInfos;
use AlibabaCloud\Tea\Model;

class QueryDevicePropertiesDataResponse extends Model
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
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var propertyDataInfos
     */
    public $propertyDataInfos;
    protected $_name = [
        'code'              => 'Code',
        'errorMessage'      => 'ErrorMessage',
        'nextTime'          => 'NextTime',
        'nextValid'         => 'NextValid',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'propertyDataInfos' => 'PropertyDataInfos',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('nextTime', $this->nextTime, true);
        Model::validateRequired('nextValid', $this->nextValid, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('propertyDataInfos', $this->propertyDataInfos, true);
    }

    public function toMap()
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->propertyDataInfos) {
            $res['PropertyDataInfos'] = null !== $this->propertyDataInfos ? $this->propertyDataInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDevicePropertiesDataResponse
     */
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['PropertyDataInfos'])) {
            $model->propertyDataInfos = propertyDataInfos::fromMap($map['PropertyDataInfos']);
        }

        return $model;
    }
}
