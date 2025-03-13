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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetDocumentRequest;

use AlibabaCloud\Tea\Model;

class document extends Model
{
    /**
     * @example 用户指定的文档唯一ID
     *
     * @var string
     */
    public $docId;

    /**
     * @example 内部文档唯一ID
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example xx
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'title' => 'Title',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return document
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
