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

use AlibabaCloud\Tea\Model;

class PreviewDocumentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 8326472354762354
     *
     * @var string
     */
    public $documentId;
    protected $_name = [
        'documentId' => 'documentId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentId) {
            $res['documentId'] = $this->documentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreviewDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['documentId'])) {
            $model->documentId = $map['documentId'];
        }

        return $model;
    }
}
