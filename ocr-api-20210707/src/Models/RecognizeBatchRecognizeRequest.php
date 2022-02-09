<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeBatchRecognizeRequest extends Model
{
    /**
     * @description 图片名称
     *
     * @var string
     */
    public $imageName;

    /**
     * @description 图片识别op类型
     *
     * @var string
     */
    public $imageOp;

    /**
     * @description 图片存入oss中的key
     *
     * @var string
     */
    public $imageOssKey;

    /**
     * @description 是否需要自动旋转功能(结构化检测、混贴场景、教育相关场景会自动做旋转，无需设置)，返回角度信息
     *
     * @var bool
     */
    public $needRotate;

    /**
     * @description 是否按顺序输出文字块。false表示从左往右，从上到下的顺序；true表示从上到下，从左往右的顺序
     *
     * @var bool
     */
    public $needSortPage;

    /**
     * @description 是否输出单字识别结果
     *
     * @var bool
     */
    public $outputCharInfo;

    /**
     * @description 是否输出表格识别结果，包含单元格信息
     *
     * @var bool
     */
    public $outputTable;

    /**
     * @description 图片链接（长度不超 2048，不支持 base64）
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'imageName'      => 'ImageName',
        'imageOp'        => 'ImageOp',
        'imageOssKey'    => 'ImageOssKey',
        'needRotate'     => 'NeedRotate',
        'needSortPage'   => 'NeedSortPage',
        'outputCharInfo' => 'OutputCharInfo',
        'outputTable'    => 'OutputTable',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOp) {
            $res['ImageOp'] = $this->imageOp;
        }
        if (null !== $this->imageOssKey) {
            $res['ImageOssKey'] = $this->imageOssKey;
        }
        if (null !== $this->needRotate) {
            $res['NeedRotate'] = $this->needRotate;
        }
        if (null !== $this->needSortPage) {
            $res['NeedSortPage'] = $this->needSortPage;
        }
        if (null !== $this->outputCharInfo) {
            $res['OutputCharInfo'] = $this->outputCharInfo;
        }
        if (null !== $this->outputTable) {
            $res['OutputTable'] = $this->outputTable;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeBatchRecognizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOp'])) {
            $model->imageOp = $map['ImageOp'];
        }
        if (isset($map['ImageOssKey'])) {
            $model->imageOssKey = $map['ImageOssKey'];
        }
        if (isset($map['NeedRotate'])) {
            $model->needRotate = $map['NeedRotate'];
        }
        if (isset($map['NeedSortPage'])) {
            $model->needSortPage = $map['NeedSortPage'];
        }
        if (isset($map['OutputCharInfo'])) {
            $model->outputCharInfo = $map['OutputCharInfo'];
        }
        if (isset($map['OutputTable'])) {
            $model->outputTable = $map['OutputTable'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
