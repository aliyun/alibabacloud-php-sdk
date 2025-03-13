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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\intelligentSearchConfig\searchSamples;

use AlibabaCloud\Tea\Model;

class articles extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $select;

    /**
     * @example false
     *
     * @var bool
     */
    public $stared;

    /**
     * @example xx
     *
     * @var string
     */
    public $title;

    /**
     * @example http://xxx.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'select' => 'Select',
        'stared' => 'Stared',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }
        if (null !== $this->stared) {
            $res['Stared'] = $this->stared;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return articles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }
        if (isset($map['Stared'])) {
            $model->stared = $map['Stared'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
