<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListAnalysisTagDetailByTaskIdResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListAnalysisTagDetailByTaskIdResponseBody\data\contentTags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $content;

    /**
     * @var contentTags[]
     */
    public $contentTags;

    /**
     * @var string
     */
    public $originResponse;

    /**
     * @var string[]
     */
    public $sourceList;
    protected $_name = [
        'content' => 'content',
        'contentTags' => 'contentTags',
        'originResponse' => 'originResponse',
        'sourceList' => 'sourceList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->contentTags) {
            $res['contentTags'] = [];
            if (null !== $this->contentTags && \is_array($this->contentTags)) {
                $n = 0;
                foreach ($this->contentTags as $item) {
                    $res['contentTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->originResponse) {
            $res['originResponse'] = $this->originResponse;
        }
        if (null !== $this->sourceList) {
            $res['sourceList'] = $this->sourceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['contentTags'])) {
            if (!empty($map['contentTags'])) {
                $model->contentTags = [];
                $n = 0;
                foreach ($map['contentTags'] as $item) {
                    $model->contentTags[$n++] = null !== $item ? contentTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['originResponse'])) {
            $model->originResponse = $map['originResponse'];
        }
        if (isset($map['sourceList'])) {
            if (!empty($map['sourceList'])) {
                $model->sourceList = $map['sourceList'];
            }
        }

        return $model;
    }
}
