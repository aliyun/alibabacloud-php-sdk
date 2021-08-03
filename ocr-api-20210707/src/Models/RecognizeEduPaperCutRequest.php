<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeEduPaperCutRequest extends Model
{
    /**
     * @description 图片链接（长度不超 1014，不支持 base64）
     *
     * @var string
     */
    public $url;

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
     * @description 是否输出原图坐标信息(如果图片被做过旋转，图片校正等处理)
     *
     * @var bool
     */
    public $outputOricoord;
    protected $_name = [
        'url'            => 'Url',
        'cutType'        => 'CutType',
        'imageType'      => 'ImageType',
        'subject'        => 'Subject',
        'outputOricoord' => 'OutputOricoord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->cutType) {
            $res['CutType'] = $this->cutType;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->outputOricoord) {
            $res['OutputOricoord'] = $this->outputOricoord;
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['CutType'])) {
            $model->cutType = $map['CutType'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['OutputOricoord'])) {
            $model->outputOricoord = $map['OutputOricoord'];
        }

        return $model;
    }
}
