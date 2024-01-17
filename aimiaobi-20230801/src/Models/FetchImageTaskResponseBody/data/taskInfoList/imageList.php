<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody\data\taskInfoList;

use AlibabaCloud\Tea\Model;

class imageList extends Model
{
    /**
     * @example NoData
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @example https://a-hbr-temp-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/r-000aham3nsx9gc7a8r5l.csv?Expires=1678260131&OSSAccessKeyId=LTAIjGotF8wXIEjy&Signature=WpMfqBnjeR0w5UL1xFAd1J556Pw%3D
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'code'    => 'Code',
        'message' => 'Message',
        'url'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
