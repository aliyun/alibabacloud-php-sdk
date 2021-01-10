<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateBuiltinFunctionTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $artifactUploadUrl;
    protected $_name = [
        'requestId'         => 'RequestId',
        'bizId'             => 'BizId',
        'artifactUploadUrl' => 'ArtifactUploadUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->artifactUploadUrl) {
            $res['ArtifactUploadUrl'] = $this->artifactUploadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBuiltinFunctionTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ArtifactUploadUrl'])) {
            $model->artifactUploadUrl = $map['ArtifactUploadUrl'];
        }

        return $model;
    }
}
