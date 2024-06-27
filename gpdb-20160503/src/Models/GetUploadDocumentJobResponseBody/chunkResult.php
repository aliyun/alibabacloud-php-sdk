<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetUploadDocumentJobResponseBody;

use AlibabaCloud\Tea\Model;

class chunkResult extends Model
{
    /**
     * @description The URL of the file after chunking. The validity period of the URL is 2 hours. The file is in the JSONL format. Each line is in the `{"page_content":"*****", "metadata": {"**":"***","**":"***"}` format.
     *
     * @example http://xxx/test.jsonl
     *
     * @var string
     */
    public $chunkFileUrl;

    /**
     * @description The URL of the file that does not contain metadata after chunking. The validity period of the URL is 2 hours. The file is in the TXT format. Each line is a chunk. The file can be easily used for embedding.
     *
     * @example http://xxx/test.txt
     *
     * @var string
     */
    public $plainChunkFileUrl;
    protected $_name = [
        'chunkFileUrl'      => 'ChunkFileUrl',
        'plainChunkFileUrl' => 'PlainChunkFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkFileUrl) {
            $res['ChunkFileUrl'] = $this->chunkFileUrl;
        }
        if (null !== $this->plainChunkFileUrl) {
            $res['PlainChunkFileUrl'] = $this->plainChunkFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chunkResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChunkFileUrl'])) {
            $model->chunkFileUrl = $map['ChunkFileUrl'];
        }
        if (isset($map['PlainChunkFileUrl'])) {
            $model->plainChunkFileUrl = $map['PlainChunkFileUrl'];
        }

        return $model;
    }
}
