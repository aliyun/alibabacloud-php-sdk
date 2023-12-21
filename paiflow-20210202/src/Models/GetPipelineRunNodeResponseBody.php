<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody\metadata;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody\spec;
use AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody\statusInfo;
use AlibabaCloud\Tea\Model;

class GetPipelineRunNodeResponseBody extends Model
{
    /**
     * @example core/v1
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @example 0a981ea816**********42244e7ba2
     *
     * @var string
     */
    public $requestId;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @var statusInfo
     */
    public $statusInfo;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'metadata'   => 'Metadata',
        'requestId'  => 'RequestId',
        'spec'       => 'Spec',
        'statusInfo' => 'StatusInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = null !== $this->metadata ? $this->metadata->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->statusInfo) {
            $res['StatusInfo'] = null !== $this->statusInfo ? $this->statusInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineRunNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = metadata::fromMap($map['Metadata']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }
        if (isset($map['StatusInfo'])) {
            $model->statusInfo = statusInfo::fromMap($map['StatusInfo']);
        }

        return $model;
    }
}
