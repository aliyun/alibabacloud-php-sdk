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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult\videoMindMappings;

use AlibabaCloud\Tea\Model;

class childNodes extends Model
{
    /**
     * @var childNodes\childNodes[]
     */
    public $childNodes;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'childNodes' => 'childNodes',
        'name' => 'name',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->childNodes) {
            $res['childNodes'] = [];
            if (null !== $this->childNodes && \is_array($this->childNodes)) {
                $n = 0;
                foreach ($this->childNodes as $item) {
                    $res['childNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['childNodes'])) {
            if (!empty($map['childNodes'])) {
                $model->childNodes = [];
                $n = 0;
                foreach ($map['childNodes'] as $item) {
                    $model->childNodes[$n++] = null !== $item ? childNodes\childNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
