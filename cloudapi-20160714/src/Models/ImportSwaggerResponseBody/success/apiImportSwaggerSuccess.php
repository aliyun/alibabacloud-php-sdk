<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody\success;

use AlibabaCloud\Tea\Model;

class apiImportSwaggerSuccess extends Model
{
    /**
     * @description Specifies that the operation is CREATE or MODIFY.
     *
     * @example CREATE
     *
     * @var string
     */
    public $apiOperation;

    /**
     * @description The UID of the imported API.
     *
     * @example 8e274ec61cf6468e83b68371956831cb
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description The HTTP method of the API.
     *
     * @example get
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @description The request path of the API.
     *
     * @example /http/get/mapping
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'apiOperation' => 'ApiOperation',
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
     * @return apiImportSwaggerSuccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiOperation'])) {
            $model->apiOperation = $map['ApiOperation'];
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
