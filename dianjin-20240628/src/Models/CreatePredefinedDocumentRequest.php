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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentRequest\chunks;
use AlibabaCloud\Tea\Model;

class CreatePredefinedDocumentRequest extends Model
{
    /**
     * @var chunks[]
     */
    public $chunks;

    /**
     * @example a1b2c3
     *
     * @var string
     */
    public $libraryId;

    /**
     * @example {"a": "1"}
     *
     * @var mixed[]
     */
    public $metadata;

    /**
     * @example 测试文档
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'chunks' => 'chunks',
        'libraryId' => 'libraryId',
        'metadata' => 'metadata',
        'title' => 'title',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunks) {
            $res['chunks'] = [];
            if (null !== $this->chunks && \is_array($this->chunks)) {
                $n = 0;
                foreach ($this->chunks as $item) {
                    $res['chunks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->metadata) {
            $res['metadata'] = $this->metadata;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePredefinedDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chunks'])) {
            if (!empty($map['chunks'])) {
                $model->chunks = [];
                $n = 0;
                foreach ($map['chunks'] as $item) {
                    $model->chunks[$n++] = null !== $item ? chunks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['metadata'])) {
            $model->metadata = $map['metadata'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
