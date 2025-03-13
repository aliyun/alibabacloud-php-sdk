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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 6jh378d
     *
     * @var string
     */
    public $qaLibraryId;
    protected $_name = [
        'qaLibraryId' => 'qaLibraryId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->qaLibraryId) {
            $res['qaLibraryId'] = $this->qaLibraryId;
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
        if (isset($map['qaLibraryId'])) {
            $model->qaLibraryId = $map['qaLibraryId'];
        }

        return $model;
    }
}
