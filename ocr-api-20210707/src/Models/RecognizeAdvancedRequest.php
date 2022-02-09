<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeAdvancedRequest extends Model
{
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
     * @description 是否需要去除印章功能，默认不需要。true：需要 false：不需要
     *
     * @var bool
     */
    public $noStamp;

    /**
     * @description 是否输出单字识别结果
     *
     * @var bool
     */
    public $outputCharInfo;

    /**
     * @description 是否需要图案检测功能，默认不需要。true：需要 false：不需要
     *
     * @var bool
     */
    public $outputFigure;

    /**
     * @description 是否输出表格识别结果，包含单元格信息
     *
     * @var bool
     */
    public $outputTable;

    /**
     * @description 是否需要分段功能，默认不需要。true：需要 false：不需要
     *
     * @var bool
     */
    public $paragraph;

    /**
     * @description 是否需要成行返回功能，默认不需要
     *
     * @var bool
     */
    public $row;

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
        'needRotate'     => 'NeedRotate',
        'needSortPage'   => 'NeedSortPage',
        'noStamp'        => 'NoStamp',
        'outputCharInfo' => 'OutputCharInfo',
        'outputFigure'   => 'OutputFigure',
        'outputTable'    => 'OutputTable',
        'paragraph'      => 'Paragraph',
        'row'            => 'Row',
        'url'            => 'Url',
        'body'           => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needRotate) {
            $res['NeedRotate'] = $this->needRotate;
        }
        if (null !== $this->needSortPage) {
            $res['NeedSortPage'] = $this->needSortPage;
        }
        if (null !== $this->noStamp) {
            $res['NoStamp'] = $this->noStamp;
        }
        if (null !== $this->outputCharInfo) {
            $res['OutputCharInfo'] = $this->outputCharInfo;
        }
        if (null !== $this->outputFigure) {
            $res['OutputFigure'] = $this->outputFigure;
        }
        if (null !== $this->outputTable) {
            $res['OutputTable'] = $this->outputTable;
        }
        if (null !== $this->paragraph) {
            $res['Paragraph'] = $this->paragraph;
        }
        if (null !== $this->row) {
            $res['Row'] = $this->row;
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
     * @return RecognizeAdvancedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedRotate'])) {
            $model->needRotate = $map['NeedRotate'];
        }
        if (isset($map['NeedSortPage'])) {
            $model->needSortPage = $map['NeedSortPage'];
        }
        if (isset($map['NoStamp'])) {
            $model->noStamp = $map['NoStamp'];
        }
        if (isset($map['OutputCharInfo'])) {
            $model->outputCharInfo = $map['OutputCharInfo'];
        }
        if (isset($map['OutputFigure'])) {
            $model->outputFigure = $map['OutputFigure'];
        }
        if (isset($map['OutputTable'])) {
            $model->outputTable = $map['OutputTable'];
        }
        if (isset($map['Paragraph'])) {
            $model->paragraph = $map['Paragraph'];
        }
        if (isset($map['Row'])) {
            $model->row = $map['Row'];
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
