<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAiAnalysisResponseBody\aiAnalysisResultList;

use AlibabaCloud\Dara\Model;

class aiAnalysisResult extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'Content',
        'extra' => 'Extra',
        'resultType' => 'ResultType',
        'summary' => 'Summary',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
