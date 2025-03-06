<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\failed;

use AlibabaCloud\Tea\Model;

class apiImportSwaggerFailed extends Model
{
    /**
     * @description The error message returned when the API is created.
     *
     * @example api already exists : apiUid ===> 8e274ec61cf6468e83b68371956831cb
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The HTTP method configured when the API is created.
     *
     * @example post
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
        'errorMsg'   => 'ErrorMsg',
        'httpMethod' => 'HttpMethod',
        'path'       => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
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
     * @return apiImportSwaggerFailed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
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
