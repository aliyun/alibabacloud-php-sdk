<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateDocumentChunkRequest;

use AlibabaCloud\Dara\Model;

class chunks extends Model
{
    /**
     * @var string
     */
    public $chunkId;

    /**
     * @var string
     */
    public $chunkText;
    protected $_name = [
        'chunkId' => 'chunkId',
        'chunkText' => 'chunkText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkId) {
            $res['chunkId'] = $this->chunkId;
        }

        if (null !== $this->chunkText) {
            $res['chunkText'] = $this->chunkText;
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
        if (isset($map['chunkId'])) {
            $model->chunkId = $map['chunkId'];
        }

        if (isset($map['chunkText'])) {
            $model->chunkText = $map['chunkText'];
        }

        return $model;
    }
}
