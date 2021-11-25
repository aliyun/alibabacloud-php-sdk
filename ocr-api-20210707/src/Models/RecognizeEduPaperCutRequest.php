<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeEduPaperCutRequest extends Model
{
    /**
     * @description 切题类型
     *
     * @var string
     */
    public $cutType;

    /**
     * @description 图片类型
     *
     * @var string
     */
    public $imageType;

    /**
     * @description 年级学科
     *
     * @var string
     */
    public $subject;

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
        'cutType'   => 'CutType',
        'imageType' => 'ImageType',
        'subject'   => 'Subject',
        'url'       => 'Url',
        'body'      => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cutType) {
            $res['CutType'] = $this->cutType;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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
     * @return RecognizeEduPaperCutRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CutType'])) {
            $model->cutType = $map['CutType'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
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
