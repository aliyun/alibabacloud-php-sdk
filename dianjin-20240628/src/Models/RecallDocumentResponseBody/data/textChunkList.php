<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\textChunkList\pos;

class textChunkList extends Model
{
    /**
     * @var string
     */
    public $chunkId;
    /**
     * @var mixed[]
     */
    public $chunkMeta;
    /**
     * @var string
     */
    public $chunkOssUrl;
    /**
     * @var string
     */
    public $chunkText;
    /**
     * @var string
     */
    public $chunkType;
    /**
     * @var string
     */
    public $docId;
    /**
     * @var string
     */
    public $fileType;
    /**
     * @var string
     */
    public $libraryId;
    /**
     * @var string
     */
    public $libraryName;
    /**
     * @var string
     */
    public $nextChunkId;
    /**
     * @var pos[]
     */
    public $pos;
    /**
     * @var string
     */
    public $preChunkId;
    /**
     * @var float
     */
    public $score;
    /**
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
        if (\is_array($this->chunkMeta)) {
            Model::validateArray($this->chunkMeta);
        }
        if (\is_array($this->pos)) {
            Model::validateArray($this->pos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkId) {
            $res['chunkId'] = $this->chunkId;
        }

        if (null !== $this->chunkMeta) {
            if (\is_array($this->chunkMeta)) {
                $res['chunkMeta'] = [];
                foreach ($this->chunkMeta as $key1 => $value1) {
                    $res['chunkMeta'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->pos)) {
                $res['pos'] = [];
                $n1         = 0;
                foreach ($this->pos as $item1) {
                    $res['pos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['chunkMeta'])) {
            if (!empty($map['chunkMeta'])) {
                $model->chunkMeta = [];
                foreach ($map['chunkMeta'] as $key1 => $value1) {
                    $model->chunkMeta[$key1] = $value1;
                }
            }
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
                $n1         = 0;
                foreach ($map['pos'] as $item1) {
                    $model->pos[$n1++] = pos::fromMap($item1);
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
