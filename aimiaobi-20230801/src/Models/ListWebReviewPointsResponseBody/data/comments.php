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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListWebReviewPointsResponseBody\data;

use AlibabaCloud\Tea\Model;

class comments extends Model
{
    /**
     * @example 来源
     *
     * @var string
     */
    public $source;

    /**
     * @example 评论内容
     *
     * @var string
     */
    public $text;

    /**
     * @example 标题
     *
     * @var string
     */
    public $title;

    /**
     * @example 当前评论所属的URL
     *
     * @var string
     */
    public $url;

    /**
     * @example 评论用户名
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'source' => 'Source',
        'text' => 'Text',
        'title' => 'Title',
        'url' => 'Url',
        'username' => 'Username',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return comments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
