<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateFunctionDeploymentResponseBody extends Model
{
    /**
     * @var string
     */
    public $uploadSignedUrl;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'uploadSignedUrl' => 'UploadSignedUrl',
        'deploymentId'    => 'DeploymentId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uploadSignedUrl) {
            $res['UploadSignedUrl'] = $this->uploadSignedUrl;
        }
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['UploadSignedUrl'])) {
            $model->uploadSignedUrl = $map['UploadSignedUrl'];
        }
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
