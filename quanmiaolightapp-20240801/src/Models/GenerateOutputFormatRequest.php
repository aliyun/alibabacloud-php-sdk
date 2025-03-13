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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GenerateOutputFormatRequest\tags;
use AlibabaCloud\Tea\Model;

class GenerateOutputFormatRequest extends Model
{
    /**
     * @example clueMining
     *
     * @var string
     */
    public $businessType;

    /**
     * @example 待分析文本
     *
     * @var string
     */
    public $content;

    /**
     * @example 额外信息
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @description This parameter is required.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @example 给你一条待分析文本数据，请你按照标签体系来对数据进行打标。
     *
     * @var string
     */
    public $taskDescription;
    protected $_name = [
        'businessType' => 'businessType',
        'content' => 'content',
        'extraInfo' => 'extraInfo',
        'tags' => 'tags',
        'taskDescription' => 'taskDescription',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['businessType'] = $this->businessType;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOutputFormatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['businessType'])) {
            $model->businessType = $map['businessType'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        return $model;
    }
}
