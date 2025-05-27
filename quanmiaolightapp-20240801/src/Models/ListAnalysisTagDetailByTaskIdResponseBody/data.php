<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListAnalysisTagDetailByTaskIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListAnalysisTagDetailByTaskIdResponseBody\data\contentTags;

class data extends Model
{
    /**
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

    public function validate()
    {
        if (\is_array($this->contentTags)) {
            Model::validateArray($this->contentTags);
        }
        if (\is_array($this->sourceList)) {
            Model::validateArray($this->sourceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contentTags) {
            if (\is_array($this->contentTags)) {
                $res['contentTags'] = [];
                $n1 = 0;
                foreach ($this->contentTags as $item1) {
                    $res['contentTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->originResponse) {
            $res['originResponse'] = $this->originResponse;
        }

        if (null !== $this->sourceList) {
            if (\is_array($this->sourceList)) {
                $res['sourceList'] = [];
                $n1 = 0;
                foreach ($this->sourceList as $item1) {
                    $res['sourceList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['contentTags'])) {
            if (!empty($map['contentTags'])) {
                $model->contentTags = [];
                $n1 = 0;
                foreach ($map['contentTags'] as $item1) {
                    $model->contentTags[$n1++] = contentTags::fromMap($item1);
                }
            }
        }

        if (isset($map['originResponse'])) {
            $model->originResponse = $map['originResponse'];
        }

        if (isset($map['sourceList'])) {
            if (!empty($map['sourceList'])) {
                $model->sourceList = [];
                $n1 = 0;
                foreach ($map['sourceList'] as $item1) {
                    $model->sourceList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
