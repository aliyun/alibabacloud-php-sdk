<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeDocumentStructureRequest extends Model
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
    public $outputTable;

    /**
     * @var bool
     */
    public $page;

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
     * @var bool
     */
    public $useNewStyleOutput;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'needRotate'        => 'NeedRotate',
        'needSortPage'      => 'NeedSortPage',
        'noStamp'           => 'NoStamp',
        'outputCharInfo'    => 'OutputCharInfo',
        'outputTable'       => 'OutputTable',
        'page'              => 'Page',
        'paragraph'         => 'Paragraph',
        'row'               => 'Row',
        'url'               => 'Url',
        'useNewStyleOutput' => 'UseNewStyleOutput',
        'body'              => 'body',
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
        if (null !== $this->outputTable) {
            $res['OutputTable'] = $this->outputTable;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
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
        if (null !== $this->useNewStyleOutput) {
            $res['UseNewStyleOutput'] = $this->useNewStyleOutput;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeDocumentStructureRequest
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
        if (isset($map['OutputTable'])) {
            $model->outputTable = $map['OutputTable'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
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
        if (isset($map['UseNewStyleOutput'])) {
            $model->useNewStyleOutput = $map['UseNewStyleOutput'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
