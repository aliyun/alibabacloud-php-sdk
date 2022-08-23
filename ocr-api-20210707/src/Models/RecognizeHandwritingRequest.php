<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeHandwritingRequest extends Model
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
    public $outputCharInfo;

    /**
     * @var bool
     */
    public $outputTable;

    /**
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'needRotate'     => 'NeedRotate',
        'needSortPage'   => 'NeedSortPage',
        'outputCharInfo' => 'OutputCharInfo',
        'outputTable'    => 'OutputTable',
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
        if (null !== $this->outputCharInfo) {
            $res['OutputCharInfo'] = $this->outputCharInfo;
        }
        if (null !== $this->outputTable) {
            $res['OutputTable'] = $this->outputTable;
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
     * @return RecognizeHandwritingRequest
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
        if (isset($map['OutputCharInfo'])) {
            $model->outputCharInfo = $map['OutputCharInfo'];
        }
        if (isset($map['OutputTable'])) {
            $model->outputTable = $map['OutputTable'];
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
