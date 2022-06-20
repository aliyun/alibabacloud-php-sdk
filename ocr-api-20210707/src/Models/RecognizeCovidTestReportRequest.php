<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeCovidTestReportRequest extends Model
{
    /**
     * @var bool
     */
    public $multipleResult;

    /**
     * @description 图片链接（长度不超 2048，不支持 base64）
     *
     * @var string
     */
    public $url;

    /**
     * @description 图片二进制字节流，最大10MB
     *
     * @var Stream
     */
    public $body;
    protected $_name = [
        'multipleResult' => 'MultipleResult',
        'url'            => 'Url',
        'body'           => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multipleResult) {
            $res['MultipleResult'] = $this->multipleResult;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeCovidTestReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultipleResult'])) {
            $model->multipleResult = $map['MultipleResult'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
