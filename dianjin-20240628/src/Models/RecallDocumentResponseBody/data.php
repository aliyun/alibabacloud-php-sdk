<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\chunkList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\chunkPartList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\documents;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\textChunkList;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\vectorChunkList;
use AlibabaCloud\Tea\Model;

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
     * @example 100
     *
     * @var int
     */
    public $embeddingElapsedMs;

    /**
     * @var textChunkList[]
     */
    public $textChunkList;

    /**
     * @example 100
     *
     * @var int
     */
    public $textSearchElapsedMs;

    /**
     * @example 400
     *
     * @var int
     */
    public $totalElapsedMs;

    /**
     * @var vectorChunkList[]
     */
    public $vectorChunkList;

    /**
     * @example 100
     *
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

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkList) {
            $res['chunkList'] = [];
            if (null !== $this->chunkList && \is_array($this->chunkList)) {
                $n = 0;
                foreach ($this->chunkList as $item) {
                    $res['chunkList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chunkPartList) {
            $res['chunkPartList'] = [];
            if (null !== $this->chunkPartList && \is_array($this->chunkPartList)) {
                $n = 0;
                foreach ($this->chunkPartList as $item) {
                    $res['chunkPartList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chunkTextList) {
            $res['chunkTextList'] = $this->chunkTextList;
        }
        if (null !== $this->documents) {
            $res['documents'] = [];
            if (null !== $this->documents && \is_array($this->documents)) {
                $n = 0;
                foreach ($this->documents as $item) {
                    $res['documents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->embeddingElapsedMs) {
            $res['embeddingElapsedMs'] = $this->embeddingElapsedMs;
        }
        if (null !== $this->textChunkList) {
            $res['textChunkList'] = [];
            if (null !== $this->textChunkList && \is_array($this->textChunkList)) {
                $n = 0;
                foreach ($this->textChunkList as $item) {
                    $res['textChunkList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['vectorChunkList'] = [];
            if (null !== $this->vectorChunkList && \is_array($this->vectorChunkList)) {
                $n = 0;
                foreach ($this->vectorChunkList as $item) {
                    $res['vectorChunkList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vectorSearchElapsedMs) {
            $res['vectorSearchElapsedMs'] = $this->vectorSearchElapsedMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chunkList'])) {
            if (!empty($map['chunkList'])) {
                $model->chunkList = [];
                $n = 0;
                foreach ($map['chunkList'] as $item) {
                    $model->chunkList[$n++] = null !== $item ? chunkList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['chunkPartList'])) {
            if (!empty($map['chunkPartList'])) {
                $model->chunkPartList = [];
                $n = 0;
                foreach ($map['chunkPartList'] as $item) {
                    $model->chunkPartList[$n++] = null !== $item ? chunkPartList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['chunkTextList'])) {
            if (!empty($map['chunkTextList'])) {
                $model->chunkTextList = $map['chunkTextList'];
            }
        }
        if (isset($map['documents'])) {
            if (!empty($map['documents'])) {
                $model->documents = [];
                $n = 0;
                foreach ($map['documents'] as $item) {
                    $model->documents[$n++] = null !== $item ? documents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['embeddingElapsedMs'])) {
            $model->embeddingElapsedMs = $map['embeddingElapsedMs'];
        }
        if (isset($map['textChunkList'])) {
            if (!empty($map['textChunkList'])) {
                $model->textChunkList = [];
                $n = 0;
                foreach ($map['textChunkList'] as $item) {
                    $model->textChunkList[$n++] = null !== $item ? textChunkList::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['vectorChunkList'] as $item) {
                    $model->vectorChunkList[$n++] = null !== $item ? vectorChunkList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['vectorSearchElapsedMs'])) {
            $model->vectorSearchElapsedMs = $map['vectorSearchElapsedMs'];
        }

        return $model;
    }
}
