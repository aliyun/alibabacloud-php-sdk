<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponse\entity;
use AlibabaCloud\Tea\Model;

class GetMetaTableThemeLevelResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var entity
     */
    public $entity;
    protected $_name = [
        'requestId'      => 'RequestId',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'success'        => 'Success',
        'entity'         => 'Entity',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('entity', $this->entity, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->entity) {
            $res['Entity'] = null !== $this->entity ? $this->entity->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaTableThemeLevelResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Entity'])) {
            $model->entity = entity::fromMap($map['Entity']);
        }

        return $model;
    }
}
