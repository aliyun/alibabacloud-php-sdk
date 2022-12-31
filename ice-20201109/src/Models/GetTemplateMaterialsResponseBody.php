<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateMaterialsResponseBody extends Model
{
    /**
     * @example {"music.mp3":"https://bucket.oss-cn-shanghai.aliyuncs.com/music.mp3?sign=xxx","config.json":"https://bucket.oss-cn-shanghai.aliyuncs.com/config.json?sign=xxx","assets/1.jpg":"https://bucket.oss-cn-shanghai.aliyuncs.com/assets/1.jpg?sign=xxx"}
     *
     * @var string
     */
    public $materialUrls;

    /**
     * @description Id of the request
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'materialUrls' => 'MaterialUrls',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialUrls) {
            $res['MaterialUrls'] = $this->materialUrls;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTemplateMaterialsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialUrls'])) {
            $model->materialUrls = $map['MaterialUrls'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
