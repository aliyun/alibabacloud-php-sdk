<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\ImportSwaggerResponseBody\failed;

use AlibabaCloud\Tea\Model;

class apiImportSwaggerFailed extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $httpMethod;

    /**
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
