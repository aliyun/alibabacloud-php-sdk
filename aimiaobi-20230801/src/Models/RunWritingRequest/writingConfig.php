<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\writingConfig\promptTag;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\writingConfig\tags;
use AlibabaCloud\Tea\Model;

class writingConfig extends Model
{
    /**
     * @example 写作领域，media:传媒,government:政务,market:营销
     *
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
     * @example true
     *
     * @var bool
     */
    public $useSearch;
    protected $_name = [
        'domain'    => 'Domain',
        'promptTag' => 'PromptTag',
        'tags'      => 'Tags',
        'useSearch' => 'UseSearch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->promptTag) {
            $res['PromptTag'] = null !== $this->promptTag ? $this->promptTag->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->useSearch) {
            $res['UseSearch'] = $this->useSearch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return writingConfig
     */
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UseSearch'])) {
            $model->useSearch = $map['UseSearch'];
        }

        return $model;
    }
}
