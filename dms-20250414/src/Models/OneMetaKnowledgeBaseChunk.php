<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OneMetaKnowledgeBaseChunk extends Model
{
    /**
     * @var string
     */
    public $chunkMtime;

    /**
     * @var string
     */
    public $chunkTitle;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'chunkMtime' => 'ChunkMtime',
        'chunkTitle' => 'ChunkTitle',
        'content' => 'Content',
        'docName' => 'DocName',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkMtime) {
            $res['ChunkMtime'] = $this->chunkMtime;
        }

        if (null !== $this->chunkTitle) {
            $res['ChunkTitle'] = $this->chunkTitle;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['ChunkMtime'])) {
            $model->chunkMtime = $map['ChunkMtime'];
        }

        if (isset($map['ChunkTitle'])) {
            $model->chunkTitle = $map['ChunkTitle'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
