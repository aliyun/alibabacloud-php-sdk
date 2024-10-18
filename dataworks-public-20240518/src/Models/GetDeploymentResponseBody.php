<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentResponseBody\pipeline;
use AlibabaCloud\Tea\Model;

class GetDeploymentResponseBody extends Model
{
    /**
     * @description The information about the process.
     *
     * @var pipeline
     */
    public $pipeline;

    /**
     * @description The request ID.
     *
     * @example 08468352-032C-5262-AEDC-68C9FA05XXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pipeline'  => 'Pipeline',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pipeline) {
            $res['Pipeline'] = null !== $this->pipeline ? $this->pipeline->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeploymentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pipeline'])) {
            $model->pipeline = pipeline::fromMap($map['Pipeline']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
