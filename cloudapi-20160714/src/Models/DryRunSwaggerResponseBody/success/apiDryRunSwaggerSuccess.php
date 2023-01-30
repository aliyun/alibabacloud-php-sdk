<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\success;

use AlibabaCloud\Tea\Model;

class apiDryRunSwaggerSuccess extends Model
{
    /**
     * @description Specifies whether the operation is CREATE or MODIFY.
     *
     * @example CREATE
     *
     * @var string
     */
    public $apiOperation;

    /**
     * @description The API definition that complies with the Swagger specification.
     *
     * @var string
     */
    public $apiSwagger;

    /**
     * @description The UID of the successfully imported API.
     *
     * @example 8e274ec61cf6468e83b68371956831cb
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description The HTTP method configured when the API is created.
     *
     * @example get
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description The request path configured when the API is created.
     *
     * @example /http/get/mapping
     *
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
