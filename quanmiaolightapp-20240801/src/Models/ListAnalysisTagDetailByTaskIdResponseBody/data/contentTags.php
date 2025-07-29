<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListAnalysisTagDetailByTaskIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class contentTags extends Model
{
    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'tagName' => 'tagName',
        'tags' => 'tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = $map['tags'];
            }
        }

        return $model;
    }
}
