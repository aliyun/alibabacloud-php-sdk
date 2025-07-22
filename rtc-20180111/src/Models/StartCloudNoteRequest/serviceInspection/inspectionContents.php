<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\serviceInspection;

use AlibabaCloud\Tea\Model;

class inspectionContents extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 销售在开场白的时候主动向客户打招呼进行欢迎
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example 到店欢迎-欢迎语
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'Content',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inspectionContents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
