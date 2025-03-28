<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\chunkList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\chunkPartList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\documents;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\textChunkList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\vectorChunkList;

class data extends Model
{
    /**
     * @var chunkList[]
     */
    public $chunkList;

    /**
     * @var chunkPartList[]
     */
    public $chunkPartList;

    /**
     * @var string[]
     */
    public $chunkTextList;

    /**
     * @var documents[]
     */
    public $documents;

    /**
     * @var int
     */
    public $embeddingElapsedMs;

    /**
     * @var textChunkList[]
     */
    public $textChunkList;

    /**
     * @var int
     */
    public $textSearchElapsedMs;

    /**
     * @var int
     */
    public $totalElapsedMs;

    /**
     * @var vectorChunkList[]
     */
    public $vectorChunkList;

    /**
     * @var int
     */
    public $vectorSearchElapsedMs;
    protected $_name = [
        'chunkList' => 'chunkList',
        'chunkPartList' => 'chunkPartList',
        'chunkTextList' => 'chunkTextList',
        'documents' => 'documents',
        'embeddingElapsedMs' => 'embeddingElapsedMs',
        'textChunkList' => 'textChunkList',
        'textSearchElapsedMs' => 'textSearchElapsedMs',
        'totalElapsedMs' => 'totalElapsedMs',
        'vectorChunkList' => 'vectorChunkList',
        'vectorSearchElapsedMs' => 'vectorSearchElapsedMs',
    ];

    public function validate()
    {
        if (\is_array($this->chunkList)) {
            Model::validateArray($this->chunkList);
        }
        if (\is_array($this->chunkPartList)) {
            Model::validateArray($this->chunkPartList);
        }
        if (\is_array($this->chunkTextList)) {
            Model::validateArray($this->chunkTextList);
        }
        if (\is_array($this->documents)) {
            Model::validateArray($this->documents);
        }
        if (\is_array($this->textChunkList)) {
            Model::validateArray($this->textChunkList);
        }
        if (\is_array($this->vectorChunkList)) {
            Model::validateArray($this->vectorChunkList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkList) {
            if (\is_array($this->chunkList)) {
                $res['chunkList'] = [];
                $n1 = 0;
                foreach ($this->chunkList as $item1) {
                    $res['chunkList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->chunkPartList) {
            if (\is_array($this->chunkPartList)) {
                $res['chunkPartList'] = [];
                $n1 = 0;
                foreach ($this->chunkPartList as $item1) {
                    $res['chunkPartList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->chunkTextList) {
            if (\is_array($this->chunkTextList)) {
                $res['chunkTextList'] = [];
                $n1 = 0;
                foreach ($this->chunkTextList as $item1) {
                    $res['chunkTextList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->documents) {
            if (\is_array($this->documents)) {
                $res['documents'] = [];
                $n1 = 0;
                foreach ($this->documents as $item1) {
                    $res['documents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->embeddingElapsedMs) {
            $res['embeddingElapsedMs'] = $this->embeddingElapsedMs;
        }

        if (null !== $this->textChunkList) {
            if (\is_array($this->textChunkList)) {
                $res['textChunkList'] = [];
                $n1 = 0;
                foreach ($this->textChunkList as $item1) {
                    $res['textChunkList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->textSearchElapsedMs) {
            $res['textSearchElapsedMs'] = $this->textSearchElapsedMs;
        }

        if (null !== $this->totalElapsedMs) {
            $res['totalElapsedMs'] = $this->totalElapsedMs;
        }

        if (null !== $this->vectorChunkList) {
            if (\is_array($this->vectorChunkList)) {
                $res['vectorChunkList'] = [];
                $n1 = 0;
                foreach ($this->vectorChunkList as $item1) {
                    $res['vectorChunkList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vectorSearchElapsedMs) {
            $res['vectorSearchElapsedMs'] = $this->vectorSearchElapsedMs;
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
        if (isset($map['chunkList'])) {
            if (!empty($map['chunkList'])) {
                $model->chunkList = [];
                $n1 = 0;
                foreach ($map['chunkList'] as $item1) {
                    $model->chunkList[$n1++] = chunkList::fromMap($item1);
                }
            }
        }

        if (isset($map['chunkPartList'])) {
            if (!empty($map['chunkPartList'])) {
                $model->chunkPartList = [];
                $n1 = 0;
                foreach ($map['chunkPartList'] as $item1) {
                    $model->chunkPartList[$n1++] = chunkPartList::fromMap($item1);
                }
            }
        }

        if (isset($map['chunkTextList'])) {
            if (!empty($map['chunkTextList'])) {
                $model->chunkTextList = [];
                $n1 = 0;
                foreach ($map['chunkTextList'] as $item1) {
                    $model->chunkTextList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['documents'])) {
            if (!empty($map['documents'])) {
                $model->documents = [];
                $n1 = 0;
                foreach ($map['documents'] as $item1) {
                    $model->documents[$n1++] = documents::fromMap($item1);
                }
            }
        }

        if (isset($map['embeddingElapsedMs'])) {
            $model->embeddingElapsedMs = $map['embeddingElapsedMs'];
        }

        if (isset($map['textChunkList'])) {
            if (!empty($map['textChunkList'])) {
                $model->textChunkList = [];
                $n1 = 0;
                foreach ($map['textChunkList'] as $item1) {
                    $model->textChunkList[$n1++] = textChunkList::fromMap($item1);
                }
            }
        }

        if (isset($map['textSearchElapsedMs'])) {
            $model->textSearchElapsedMs = $map['textSearchElapsedMs'];
        }

        if (isset($map['totalElapsedMs'])) {
            $model->totalElapsedMs = $map['totalElapsedMs'];
        }

        if (isset($map['vectorChunkList'])) {
            if (!empty($map['vectorChunkList'])) {
                $model->vectorChunkList = [];
                $n1 = 0;
                foreach ($map['vectorChunkList'] as $item1) {
                    $model->vectorChunkList[$n1++] = vectorChunkList::fromMap($item1);
                }
            }
        }

        if (isset($map['vectorSearchElapsedMs'])) {
            $model->vectorSearchElapsedMs = $map['vectorSearchElapsedMs'];
        }

        return $model;
    }
}
