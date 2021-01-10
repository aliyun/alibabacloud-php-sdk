<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\liveResult\liveImages;

use AlibabaCloud\Tea\Model;

class liveImage extends Model
{
    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'suggestion' => 'Suggestion',
        'score'      => 'Score',
        'url'        => 'Url',
        'text'       => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
