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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointRequest;

use AlibabaCloud\Tea\Model;

class referenceData extends Model
{
    /**
     * @var string[]
     */
    public $miniDoc;
    protected $_name = [
        'miniDoc' => 'MiniDoc',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->miniDoc) {
            $res['MiniDoc'] = $this->miniDoc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referenceData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MiniDoc'])) {
            if (!empty($map['MiniDoc'])) {
                $model->miniDoc = $map['MiniDoc'];
            }
        }

        return $model;
    }
}
