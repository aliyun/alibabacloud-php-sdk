<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class RecognizeMultiLanguageRequest extends Model
{
    /**
     * @var string[]
     */
    public $languages;

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
        'languages' => 'Languages',
        'needRotate' => 'NeedRotate',
        'needSortPage' => 'NeedSortPage',
        'outputCharInfo' => 'OutputCharInfo',
        'outputTable' => 'OutputTable',
        'url' => 'Url',
        'body' => 'body',
    ];

    public function validate()
    {
        if (\is_array($this->languages)) {
            Model::validateArray($this->languages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->languages) {
            if (\is_array($this->languages)) {
                $res['Languages'] = [];
                $n1 = 0;
                foreach ($this->languages as $item1) {
                    $res['Languages'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Languages'])) {
            if (!empty($map['Languages'])) {
                $model->languages = [];
                $n1 = 0;
                foreach ($map['Languages'] as $item1) {
                    $model->languages[$n1++] = $item1;
                }
            }
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
