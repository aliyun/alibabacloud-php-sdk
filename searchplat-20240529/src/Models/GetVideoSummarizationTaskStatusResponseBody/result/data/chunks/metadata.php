<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSummarizationTaskStatusResponseBody\result\data\chunks;

use AlibabaCloud\Dara\Model;

class metadata extends Model
{
    /**
     * @var string
     */
    public $summary;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'summary' => 'summary',
        'tags' => 'tags',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
