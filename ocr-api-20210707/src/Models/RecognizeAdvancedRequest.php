<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeAdvancedRequest extends Model
{
    /**
     * @var bool
     */
    public $needRotate;

    /**
     * @var bool
     */
    public $needSortPage;

    /**
     * @var bool
     */
    public $noStamp;

    /**
     * @var bool
     */
    public $outputCharInfo;

    /**
     * @var bool
     */
    public $outputFigure;

    /**
     * @var bool
     */
    public $outputTable;

    /**
     * @var bool
     */
    public $paragraph;

    /**
     * @var bool
     */
    public $row;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'needRotate' => 'NeedRotate',
        'needSortPage' => 'NeedSortPage',
        'noStamp' => 'NoStamp',
        'outputCharInfo' => 'OutputCharInfo',
        'outputFigure' => 'OutputFigure',
        'outputTable' => 'OutputTable',
        'paragraph' => 'Paragraph',
        'row' => 'Row',
        'url' => 'Url',
        'body' => 'body',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
