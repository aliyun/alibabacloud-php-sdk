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

class GenDocQaResultRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 182364872346
     *
     * @var string
     */
    public $docId;

    /**
     * @description This parameter is required.
     *
     * @example sjdgdsfg
     *
     * @var string
     */
    public $libraryId;

    /**
     * @description This parameter is required.
     *
     * @example 0FC6636E-380A-5369-AE01-D1C15BB9B254
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'docId' => 'docId',
        'libraryId' => 'libraryId',
        'requestId' => 'requestId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenDocQaResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
