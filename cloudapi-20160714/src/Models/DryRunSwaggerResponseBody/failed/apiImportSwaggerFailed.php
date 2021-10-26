<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DryRunSwaggerResponseBody\failed;

use AlibabaCloud\Tea\Model;

class apiImportSwaggerFailed extends Model
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
    public $errorMsg;
    protected $_name = [
        'path'       => 'Path',
        'httpMethod' => 'HttpMethod',
        'errorMsg'   => 'ErrorMsg',
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
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        return $model;
    }
}
