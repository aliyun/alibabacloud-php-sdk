<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetStatusAndOssRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
        'body'      => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStatusAndOssRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
