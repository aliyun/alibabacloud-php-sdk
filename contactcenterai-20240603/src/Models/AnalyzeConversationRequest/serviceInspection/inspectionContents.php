<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\serviceInspection;

use AlibabaCloud\Tea\Model;

class inspectionContents extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'content',
        'title'   => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
