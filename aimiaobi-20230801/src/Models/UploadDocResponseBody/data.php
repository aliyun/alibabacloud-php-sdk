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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadDocResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $docIds;

    /**
     * @var string[]
     */
    public $existedIds;
    protected $_name = [
        'docIds' => 'DocIds',
        'existedIds' => 'ExistedIds',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docIds) {
            $res['DocIds'] = $this->docIds;
        }
        if (null !== $this->existedIds) {
            $res['ExistedIds'] = $this->existedIds;
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
        if (isset($map['DocIds'])) {
            if (!empty($map['DocIds'])) {
                $model->docIds = $map['DocIds'];
            }
        }
        if (isset($map['ExistedIds'])) {
            if (!empty($map['ExistedIds'])) {
                $model->existedIds = $map['ExistedIds'];
            }
        }

        return $model;
    }
}
