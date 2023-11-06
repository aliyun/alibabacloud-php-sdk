<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertChunksRequest;

use AlibabaCloud\Tea\Model;

class textChunks extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example {"title":"test"}
     *
     * @var mixed[]
     */
    public $metadata;
    protected $_name = [
        'content'  => 'Content',
        'metadata' => 'Metadata',
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
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textChunks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        return $model;
    }
}
