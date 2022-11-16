<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody\successApis;

use AlibabaCloud\Tea\Model;

class successApi extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiOperation;

    /**
     * @var string
     */
    public $httpMethod;

    /**
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
