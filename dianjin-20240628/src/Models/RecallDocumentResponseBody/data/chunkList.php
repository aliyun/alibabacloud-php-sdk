<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\chunkList\pos;
use AlibabaCloud\Tea\Model;

class chunkList extends Model
{
    /**
     * @example 823746762354
     *
     * @var string
     */
    public $chunkId;

    /**
     * @example {"a":"1"}
     *
     * @var mixed[]
     */
    public $chunkMeta;

    /**
     * @example http://oss-xxx-hangzhou.com/xxx
     *
     * @var string
     */
    public $chunkOssUrl;

    /**
     * @var string
     */
    public $chunkText;

    /**
     * @example text
     *
     * @var string
     */
    public $chunkType;

    /**
     * @example 839468263472
     *
     * @var string
     */
    public $docId;

    /**
     * @example pdf
     *
     * @var string
     */
    public $fileType;

    /**
     * @example dscsbdsk
     *
     * @var string
     */
    public $libraryId;

    /**
     * @var string
     */
    public $libraryName;

    /**
     * @example 982374872364
     *
     * @var string
     */
    public $nextChunkId;

    /**
     * @var pos[]
     */
    public $pos;

    /**
     * @example 827364827364832
     *
     * @var string
     */
    public $preChunkId;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $score;

    /**
     * @example test
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'chunkId'     => 'chunkId',
        'chunkMeta'   => 'chunkMeta',
        'chunkOssUrl' => 'chunkOssUrl',
        'chunkText'   => 'chunkText',
        'chunkType'   => 'chunkType',
        'docId'       => 'docId',
        'fileType'    => 'fileType',
        'libraryId'   => 'libraryId',
        'libraryName' => 'libraryName',
        'nextChunkId' => 'nextChunkId',
        'pos'         => 'pos',
        'preChunkId'  => 'preChunkId',
        'score'       => 'score',
        'title'       => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkId) {
            $res['chunkId'] = $this->chunkId;
        }
        if (null !== $this->chunkMeta) {
            $res['chunkMeta'] = $this->chunkMeta;
        }
        if (null !== $this->chunkOssUrl) {
            $res['chunkOssUrl'] = $this->chunkOssUrl;
        }
        if (null !== $this->chunkText) {
            $res['chunkText'] = $this->chunkText;
        }
        if (null !== $this->chunkType) {
            $res['chunkType'] = $this->chunkType;
        }
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->libraryName) {
            $res['libraryName'] = $this->libraryName;
        }
        if (null !== $this->nextChunkId) {
            $res['nextChunkId'] = $this->nextChunkId;
        }
        if (null !== $this->pos) {
            $res['pos'] = [];
            if (null !== $this->pos && \is_array($this->pos)) {
                $n = 0;
                foreach ($this->pos as $item) {
                    $res['pos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preChunkId) {
            $res['preChunkId'] = $this->preChunkId;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chunkList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chunkId'])) {
            $model->chunkId = $map['chunkId'];
        }
        if (isset($map['chunkMeta'])) {
            $model->chunkMeta = $map['chunkMeta'];
        }
        if (isset($map['chunkOssUrl'])) {
            $model->chunkOssUrl = $map['chunkOssUrl'];
        }
        if (isset($map['chunkText'])) {
            $model->chunkText = $map['chunkText'];
        }
        if (isset($map['chunkType'])) {
            $model->chunkType = $map['chunkType'];
        }
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['libraryName'])) {
            $model->libraryName = $map['libraryName'];
        }
        if (isset($map['nextChunkId'])) {
            $model->nextChunkId = $map['nextChunkId'];
        }
        if (isset($map['pos'])) {
            if (!empty($map['pos'])) {
                $model->pos = [];
                $n          = 0;
                foreach ($map['pos'] as $item) {
                    $model->pos[$n++] = null !== $item ? pos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['preChunkId'])) {
            $model->preChunkId = $map['preChunkId'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
