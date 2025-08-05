<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody;

use AlibabaCloud\Dara\Model;

class chunkResult extends Model
{
    /**
     * @var string
     */
    public $chunkFileUrl;

    /**
     * @var string
     */
    public $documentLoaderResultFileUrl;

    /**
     * @var string
     */
    public $plainChunkFileUrl;
    protected $_name = [
        'chunkFileUrl' => 'ChunkFileUrl',
        'documentLoaderResultFileUrl' => 'DocumentLoaderResultFileUrl',
        'plainChunkFileUrl' => 'PlainChunkFileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkFileUrl) {
            $res['ChunkFileUrl'] = $this->chunkFileUrl;
        }

        if (null !== $this->documentLoaderResultFileUrl) {
            $res['DocumentLoaderResultFileUrl'] = $this->documentLoaderResultFileUrl;
        }

        if (null !== $this->plainChunkFileUrl) {
            $res['PlainChunkFileUrl'] = $this->plainChunkFileUrl;
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
        if (isset($map['ChunkFileUrl'])) {
            $model->chunkFileUrl = $map['ChunkFileUrl'];
        }

        if (isset($map['DocumentLoaderResultFileUrl'])) {
            $model->documentLoaderResultFileUrl = $map['DocumentLoaderResultFileUrl'];
        }

        if (isset($map['PlainChunkFileUrl'])) {
            $model->plainChunkFileUrl = $map['PlainChunkFileUrl'];
        }

        return $model;
    }
}
