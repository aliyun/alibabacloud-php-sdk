<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetVariableGroupResponseBody\variableGroup;
use AlibabaCloud\Tea\Model;

class GetVariableGroupResponseBody extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example ""
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @var variableGroup
     */
    public $variableGroup;
    protected $_name = [
        'errorCode'     => 'errorCode',
        'errorMessage'  => 'errorMessage',
        'requestId'     => 'requestId',
        'success'       => 'success',
        'variableGroup' => 'variableGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->variableGroup) {
            $res['variableGroup'] = null !== $this->variableGroup ? $this->variableGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVariableGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['variableGroup'])) {
            $model->variableGroup = variableGroup::fromMap($map['variableGroup']);
        }

        return $model;
    }
}
