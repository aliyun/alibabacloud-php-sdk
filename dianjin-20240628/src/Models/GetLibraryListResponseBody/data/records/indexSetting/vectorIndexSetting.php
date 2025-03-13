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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryListResponseBody\data\records\indexSetting;

use AlibabaCloud\Tea\Model;

class vectorIndexSetting extends Model
{
    /**
     * @example ADB
     *
     * @var string
     */
    public $category;

    /**
     * @example DashScope
     *
     * @var string
     */
    public $embeddingType;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example null
     *
     * @var float
     */
    public $rankThreshold;

    /**
     * @example 10
     *
     * @var int
     */
    public $topK;
    protected $_name = [
        'category' => 'category',
        'embeddingType' => 'embeddingType',
        'enable' => 'enable',
        'rankThreshold' => 'rankThreshold',
        'topK' => 'topK',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->embeddingType) {
            $res['embeddingType'] = $this->embeddingType;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->rankThreshold) {
            $res['rankThreshold'] = $this->rankThreshold;
        }
        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vectorIndexSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['embeddingType'])) {
            $model->embeddingType = $map['embeddingType'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['rankThreshold'])) {
            $model->rankThreshold = $map['rankThreshold'];
        }
        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
