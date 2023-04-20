<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateFunctionDeploymentResponseBody extends Model
{
    /**
     * @example dep-5e49fd471c9d4451c33bdd06
     *
     * @var string
     */
    public $deploymentId;

    /**
     * @example 9D653EC3-8F53-4307-9B1C-52F5922384A6
     *
     * @var string
     */
    public $requestId;

    /**
     * @example http://bucket.oss-cn-shanghai.aliyuncs.com/afc0e1c9d446fxxxxx-v2.zip?OSSAccessKeyId=LTAIKCq5x****kK6&Expires=1561425220&Signature=xEuiAgUMShQ4v8fYIl3FM8Jp3MA%3D
     *
     * @var string
     */
    public $uploadSignedUrl;
    protected $_name = [
        'deploymentId'    => 'DeploymentId',
        'requestId'       => 'RequestId',
        'uploadSignedUrl' => 'UploadSignedUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadSignedUrl) {
            $res['UploadSignedUrl'] = $this->uploadSignedUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFunctionDeploymentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadSignedUrl'])) {
            $model->uploadSignedUrl = $map['UploadSignedUrl'];
        }

        return $model;
    }
}
