<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ContentPlanGenerationTask\analysis;

use AlibabaCloud\Dara\Model;

class modules extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $keyQuestions;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'Content',
        'keyQuestions' => 'KeyQuestions',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->keyQuestions)) {
            Model::validateArray($this->keyQuestions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->keyQuestions) {
            if (\is_array($this->keyQuestions)) {
                $res['KeyQuestions'] = [];
                $n1 = 0;
                foreach ($this->keyQuestions as $item1) {
                    $res['KeyQuestions'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['KeyQuestions'])) {
            if (!empty($map['KeyQuestions'])) {
                $model->keyQuestions = [];
                $n1 = 0;
                foreach ($map['KeyQuestions'] as $item1) {
                    $model->keyQuestions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
