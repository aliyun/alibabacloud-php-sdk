<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponseBody\success;

use AlibabaCloud\Tea\Model;

class apiImportSwaggerSuccess extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var string
     */
    public $apiOperation;

    /**
     * @var string
     */
    public $apiUid;
    protected $_name = [
        'path'         => 'Path',
        'httpMethod'   => 'HttpMethod',
        'apiOperation' => 'ApiOperation',
        'apiUid'       => 'ApiUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->apiOperation) {
            $res['ApiOperation'] = $this->apiOperation;
        }
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['ApiOperation'])) {
            $model->apiOperation = $map['ApiOperation'];
        }
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }

        return $model;
    }
}
