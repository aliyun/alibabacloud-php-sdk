<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchParseDocumentLayoutTaskResponseBody\data\layoutResult;

use AlibabaCloud\Dara\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $formatContent;

    /**
     * @var float
     */
    public $index;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'Content',
        'formatContent' => 'FormatContent',
        'index' => 'Index',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->formatContent) {
            $res['FormatContent'] = $this->formatContent;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FormatContent'])) {
            $model->formatContent = $map['FormatContent'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
