<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeMultiLanguageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $languagesShrink;

    /**
     * @example false
     *
     * @var bool
     */
    public $needRotate;

    /**
     * @example false
     *
     * @var bool
     */
    public $needSortPage;

    /**
     * @example false
     *
     * @var bool
     */
    public $outputCharInfo;

    /**
     * @example false
     *
     * @var bool
     */
    public $outputTable;

    /**
     * @example https://img.alicdn.com/tfs/TB1Wo7eXAvoK1RjSZFDXXXY3pXa-2512-3509.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @var Stream
     */
    public $body;
    protected $_name = [
        'languagesShrink' => 'Languages',
        'needRotate'      => 'NeedRotate',
        'needSortPage'    => 'NeedSortPage',
        'outputCharInfo'  => 'OutputCharInfo',
        'outputTable'     => 'OutputTable',
        'url'             => 'Url',
        'body'            => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->languagesShrink) {
            $res['Languages'] = $this->languagesShrink;
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
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeMultiLanguageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Languages'])) {
            $model->languagesShrink = $map['Languages'];
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
