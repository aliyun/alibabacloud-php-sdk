<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateSceneResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $previewToken;
    protected $_name = [
        'requestId'    => 'RequestId',
        'sceneId'      => 'SceneId',
        'success'      => 'Success',
        'errMessage'   => 'ErrMessage',
        'previewToken' => 'PreviewToken',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('errMessage', $this->errMessage, true);
        Model::validateRequired('previewToken', $this->previewToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->previewToken) {
            $res['PreviewToken'] = $this->previewToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSceneResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['PreviewToken'])) {
            $model->previewToken = $map['PreviewToken'];
        }

        return $model;
    }
}
