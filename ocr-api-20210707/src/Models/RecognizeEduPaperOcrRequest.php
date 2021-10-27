<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeEduPaperOcrRequest extends Model
{
    /**
     * @description 图片类型
     *
     * @var string
     */
    public $imageType;

    /**
     * @description 是否输出原图坐标信息(如果图片被做过旋转，图片校正等处理)
     *
     * @var bool
     */
    public $outputOricoord;

    /**
     * @description 年级学科
     *
     * @var string
     */
    public $subject;

    /**
     * @description 图片链接（长度不超 1014，不支持 base64）
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'imageType'      => 'ImageType',
        'outputOricoord' => 'OutputOricoord',
        'subject'        => 'Subject',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->outputOricoord) {
            $res['OutputOricoord'] = $this->outputOricoord;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeEduPaperOcrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['OutputOricoord'])) {
            $model->outputOricoord = $map['OutputOricoord'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
