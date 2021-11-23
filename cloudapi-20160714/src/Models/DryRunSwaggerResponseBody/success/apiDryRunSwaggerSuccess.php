<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\success;

use AlibabaCloud\Tea\Model;

class apiDryRunSwaggerSuccess extends Model
{
    /**
     * @var string
     */
    public $apiOperation;

    /**
     * @var string
     */
    public $apiSwagger;

    /**
     * @var string
     */
    public $apiUid;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'apiOperation' => 'ApiOperation',
        'apiSwagger'   => 'ApiSwagger',
        'apiUid'       => 'ApiUid',
        'httpMethod'   => 'HttpMethod',
        'path'         => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiOperation) {
            $res['ApiOperation'] = $this->apiOperation;
        }
        if (null !== $this->apiSwagger) {
            $res['ApiSwagger'] = $this->apiSwagger;
        }
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiDryRunSwaggerSuccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiOperation'])) {
            $model->apiOperation = $map['ApiOperation'];
        }
        if (isset($map['ApiSwagger'])) {
            $model->apiSwagger = $map['ApiSwagger'];
        }
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
