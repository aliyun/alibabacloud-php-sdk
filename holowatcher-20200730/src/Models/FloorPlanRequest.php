<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class FloorPlanRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
        'body'      => 'Body',
        'ossKey'    => 'OssKey',
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
            $res['Body'] = $this->body;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FloorPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        return $model;
    }
}
