<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitRequest;

use AlibabaCloud\Tea\Model;

class document extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentEncoding;

    /**
     * @var string
     */
    public $contentType;
    protected $_name = [
        'content'         => 'content',
        'contentEncoding' => 'content_encoding',
        'contentType'     => 'content_type',
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
        if (null !== $this->contentEncoding) {
            $res['content_encoding'] = $this->contentEncoding;
        }
        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return document
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['content_encoding'])) {
            $model->contentEncoding = $map['content_encoding'];
        }
        if (isset($map['content_type'])) {
            $model->contentType = $map['content_type'];
        }

        return $model;
    }
}
