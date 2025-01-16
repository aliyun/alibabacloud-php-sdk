<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticlesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0c05700d4d9411efbe6e0c42a106bb02
     *
     * @var string
     */
    public $articleId;
    protected $_name = [
        'articleId' => 'articleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->articleId) {
            $res['articleId'] = $this->articleId;
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
        if (isset($map['articleId'])) {
            $model->articleId = $map['articleId'];
        }

        return $model;
    }
}
