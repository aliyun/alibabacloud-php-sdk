<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetClassificationTemplateResponseBody\classificationResourceTemplateMap;
use AlibabaCloud\Tea\Model;

class GetClassificationTemplateResponseBody extends Model
{
    /**
     * @var classificationResourceTemplateMap
     */
    public $classificationResourceTemplateMap;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 427688B8-ADFB-4C4E-9D45-EF5C1FD6E23D
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
    protected $_name = [
        'classificationResourceTemplateMap' => 'ClassificationResourceTemplateMap',
        'errorCode'                         => 'ErrorCode',
        'errorMessage'                      => 'ErrorMessage',
        'requestId'                         => 'RequestId',
        'success'                           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classificationResourceTemplateMap) {
            $res['ClassificationResourceTemplateMap'] = null !== $this->classificationResourceTemplateMap ? $this->classificationResourceTemplateMap->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClassificationTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassificationResourceTemplateMap'])) {
            $model->classificationResourceTemplateMap = classificationResourceTemplateMap::fromMap($map['ClassificationResourceTemplateMap']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
