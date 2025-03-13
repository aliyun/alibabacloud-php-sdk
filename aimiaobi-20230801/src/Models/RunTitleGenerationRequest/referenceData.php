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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTitleGenerationRequest;

use AlibabaCloud\Tea\Model;

class referenceData extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $contents;
    protected $_name = [
        'contents' => 'Contents',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
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
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = $map['Contents'];
            }
        }

        return $model;
    }
}
