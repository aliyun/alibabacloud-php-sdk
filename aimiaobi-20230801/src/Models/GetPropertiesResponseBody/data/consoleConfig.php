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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data;

use AlibabaCloud\Tea\Model;

class consoleConfig extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $tipContent;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'tipContent' => 'TipContent',
        'title' => 'Title',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tipContent) {
            $res['TipContent'] = $this->tipContent;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consoleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TipContent'])) {
            $model->tipContent = $map['TipContent'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
