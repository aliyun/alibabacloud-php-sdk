<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest\knowledge;

use AlibabaCloud\Tea\Model;

class solutions extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $perspectiveIds;

    /**
     * @var string
     */
    public $plainText;
    protected $_name = [
        'content'        => 'Content',
        'perspectiveIds' => 'PerspectiveIds',
        'plainText'      => 'PlainText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->perspectiveIds) {
            $res['PerspectiveIds'] = $this->perspectiveIds;
        }
        if (null !== $this->plainText) {
            $res['PlainText'] = $this->plainText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return solutions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['PerspectiveIds'])) {
            if (!empty($map['PerspectiveIds'])) {
                $model->perspectiveIds = $map['PerspectiveIds'];
            }
        }
        if (isset($map['PlainText'])) {
            $model->plainText = $map['PlainText'];
        }

        return $model;
    }
}
