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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RecallDocumentResponseBody\data\chunkList;

use AlibabaCloud\Tea\Model;

class pos extends Model
{
    /**
     * @var float[]
     */
    public $axisArray;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @var int[]
     */
    public $textHighlightArea;
    protected $_name = [
        'axisArray' => 'axisArray',
        'page' => 'page',
        'textHighlightArea' => 'textHighlightArea',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->axisArray) {
            $res['axisArray'] = $this->axisArray;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->textHighlightArea) {
            $res['textHighlightArea'] = $this->textHighlightArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['axisArray'])) {
            if (!empty($map['axisArray'])) {
                $model->axisArray = $map['axisArray'];
            }
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['textHighlightArea'])) {
            if (!empty($map['textHighlightArea'])) {
                $model->textHighlightArea = $map['textHighlightArea'];
            }
        }

        return $model;
    }
}
