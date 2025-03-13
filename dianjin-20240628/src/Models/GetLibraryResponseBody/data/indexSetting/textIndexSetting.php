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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetLibraryResponseBody\data\indexSetting;

use AlibabaCloud\Tea\Model;

class textIndexSetting extends Model
{
    /**
     * @example ElasticSearch
     *
     * @var string
     */
    public $category;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example IkMaxWord
     *
     * @var string
     */
    public $indexAnalyzer;

    /**
     * @example null
     *
     * @var float
     */
    public $rankThreshold;

    /**
     * @example Standard
     *
     * @var string
     */
    public $searchAnalyzer;

    /**
     * @example 10
     *
     * @var int
     */
    public $topK;
    protected $_name = [
        'category' => 'category',
        'enable' => 'enable',
        'indexAnalyzer' => 'indexAnalyzer',
        'rankThreshold' => 'rankThreshold',
        'searchAnalyzer' => 'searchAnalyzer',
        'topK' => 'topK',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->indexAnalyzer) {
            $res['indexAnalyzer'] = $this->indexAnalyzer;
        }
        if (null !== $this->rankThreshold) {
            $res['rankThreshold'] = $this->rankThreshold;
        }
        if (null !== $this->searchAnalyzer) {
            $res['searchAnalyzer'] = $this->searchAnalyzer;
        }
        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textIndexSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['indexAnalyzer'])) {
            $model->indexAnalyzer = $map['indexAnalyzer'];
        }
        if (isset($map['rankThreshold'])) {
            $model->rankThreshold = $map['rankThreshold'];
        }
        if (isset($map['searchAnalyzer'])) {
            $model->searchAnalyzer = $map['searchAnalyzer'];
        }
        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
