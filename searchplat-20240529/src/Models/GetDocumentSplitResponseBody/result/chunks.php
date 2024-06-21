<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitResponseBody\result;

use AlibabaCloud\Tea\Model;

class chunks extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $meta;
    protected $_name = [
        'content' => 'content',
        'meta'    => 'meta',
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
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chunks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }

        return $model;
    }
}
