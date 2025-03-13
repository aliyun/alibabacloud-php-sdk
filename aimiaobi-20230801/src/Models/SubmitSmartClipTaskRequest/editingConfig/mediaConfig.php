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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig;

use AlibabaCloud\Tea\Model;

class mediaConfig extends Model
{
    /**
     * @var float
     */
    public $volume;
    protected $_name = [
        'volume' => 'Volume',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
