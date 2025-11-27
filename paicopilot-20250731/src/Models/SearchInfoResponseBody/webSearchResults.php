<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoResponseBody;

use AlibabaCloud\Dara\Model;

class webSearchResults extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $resultContent;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sourceLink;
    protected $_name = [
        'index' => 'Index',
        'resultContent' => 'ResultContent',
        'score' => 'Score',
        'sourceLink' => 'SourceLink',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->resultContent) {
            $res['ResultContent'] = $this->resultContent;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->sourceLink) {
            $res['SourceLink'] = $this->sourceLink;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['ResultContent'])) {
            $model->resultContent = $map['ResultContent'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['SourceLink'])) {
            $model->sourceLink = $map['SourceLink'];
        }

        return $model;
    }
}
