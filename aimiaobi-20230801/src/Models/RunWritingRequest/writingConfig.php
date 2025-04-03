<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\writingConfig\promptTag;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\writingConfig\tags;

class writingConfig extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var promptTag
     */
    public $promptTag;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var bool
     */
    public $useSearch;
    protected $_name = [
        'domain' => 'Domain',
        'promptTag' => 'PromptTag',
        'tags' => 'Tags',
        'useSearch' => 'UseSearch',
    ];

    public function validate()
    {
        if (null !== $this->promptTag) {
            $this->promptTag->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->promptTag) {
            $res['PromptTag'] = null !== $this->promptTag ? $this->promptTag->toArray($noStream) : $this->promptTag;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->useSearch) {
            $res['UseSearch'] = $this->useSearch;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['PromptTag'])) {
            $model->promptTag = promptTag::fromMap($map['PromptTag']);
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UseSearch'])) {
            $model->useSearch = $map['UseSearch'];
        }

        return $model;
    }
}
