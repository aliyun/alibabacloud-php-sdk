<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successApis;

use AlibabaCloud\Tea\Model;

class successApi extends Model
{
    /**
     * @example 92af1abffc2443eaa2b815fdbd9c13f1
     *
     * @var string
     */
    public $apiId;

    /**
     * @example CREATE
     *
     * @var string
     */
    public $apiOperation;

    /**
     * @example POST
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @example /st1
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'apiId'        => 'ApiId',
        'apiOperation' => 'ApiOperation',
        'httpMethod'   => 'HttpMethod',
        'path'         => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiOperation) {
            $res['ApiOperation'] = $this->apiOperation;
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
     * @return successApi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiOperation'])) {
            $model->apiOperation = $map['ApiOperation'];
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
