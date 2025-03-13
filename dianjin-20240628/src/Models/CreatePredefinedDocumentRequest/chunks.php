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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreatePredefinedDocumentRequest;

use AlibabaCloud\Tea\Model;

class chunks extends Model
{
    /**
     * @example {"a": "1"}
     *
     * @var mixed[]
     */
    public $chunkMeta;

    /**
     * @example 1
     *
     * @var int
     */
    public $chunkOrder;

    /**
     * @example 这是一段测试文本
     *
     * @var string
     */
    public $chunkText;

    /**
     * @example text
     *
     * @var string
     */
    public $chunkType;
    protected $_name = [
        'chunkMeta' => 'chunkMeta',
        'chunkOrder' => 'chunkOrder',
        'chunkText' => 'chunkText',
        'chunkType' => 'chunkType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->chunkMeta) {
            $res['chunkMeta'] = $this->chunkMeta;
        }
        if (null !== $this->chunkOrder) {
            $res['chunkOrder'] = $this->chunkOrder;
        }
        if (null !== $this->chunkText) {
            $res['chunkText'] = $this->chunkText;
        }
        if (null !== $this->chunkType) {
            $res['chunkType'] = $this->chunkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chunks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chunkMeta'])) {
            $model->chunkMeta = $map['chunkMeta'];
        }
        if (isset($map['chunkOrder'])) {
            $model->chunkOrder = $map['chunkOrder'];
        }
        if (isset($map['chunkText'])) {
            $model->chunkText = $map['chunkText'];
        }
        if (isset($map['chunkType'])) {
            $model->chunkType = $map['chunkType'];
        }

        return $model;
    }
}
