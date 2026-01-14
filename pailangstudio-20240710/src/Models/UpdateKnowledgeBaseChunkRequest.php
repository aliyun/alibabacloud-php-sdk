<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class UpdateKnowledgeBaseChunkRequest extends Model
{
    /**
     * @var string
     */
    public $chunkContent;

    /**
     * @var string
     */
    public $chunkStatus;
    protected $_name = [
        'chunkContent' => 'ChunkContent',
        'chunkStatus' => 'ChunkStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkContent) {
            $res['ChunkContent'] = $this->chunkContent;
        }

        if (null !== $this->chunkStatus) {
            $res['ChunkStatus'] = $this->chunkStatus;
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
        if (isset($map['ChunkContent'])) {
            $model->chunkContent = $map['ChunkContent'];
        }

        if (isset($map['ChunkStatus'])) {
            $model->chunkStatus = $map['ChunkStatus'];
        }

        return $model;
    }
}
