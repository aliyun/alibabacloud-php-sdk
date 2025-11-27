<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models\SearchInfoResponseBody;

use AlibabaCloud\Dara\Model;

class knowledgeBaseSearchResults extends Model
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
    protected $_name = [
        'index' => 'Index',
        'resultContent' => 'ResultContent',
        'score' => 'Score',
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

        return $model;
    }
}
