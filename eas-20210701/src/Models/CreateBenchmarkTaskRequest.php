<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateBenchmarkTaskRequest extends Model
{
    /**
     * @description The request body. The body includes the parameters that are set to create a stress testing task.
     *
     * @example {
     * "base": {
     * "duration": 600
     * },
     * "service": {
     * "serviceName": "test_service",
     * "requestToken": "test_token"
     * },
     * "data": {
     * "path": "https://larec-benchmark-cd.oss-cn-chengdu.aliyuncs.com/youbei/sv_dbmtl/data/youbei.warmup.tf.bin",
     * "dataType": "binary"
     * },
     * "optional": {
     * "maxRt": 100
     * }
     * }
     *
     * @var string
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBenchmarkTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
