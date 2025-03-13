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

class backgroundMusicConfig extends Model
{
    /**
     * @var string
     */
    public $style;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $volume;
    protected $_name = [
        'style' => 'Style',
        'volume' => 'Volume',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backgroundMusicConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
