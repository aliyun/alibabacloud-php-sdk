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

use AlibabaCloud\Tea\Model;

class ListHotTopicSummariesRequest extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $category;

    /**
     * @example xx
     *
     * @var string
     */
    public $hotTopic;

    /**
     * @example 2024-09-13_12
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example JlroP3CjgQh5PQDlH3ArzADkBTPZgVqo+64jhZRglNq0mEYoV5SlGb/Juvo8CdfYE9rlwEr2pIJQwdaYotak9g==
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'category' => 'category',
        'hotTopic' => 'hotTopic',
        'hotTopicVersion' => 'hotTopicVersion',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->hotTopic) {
            $res['hotTopic'] = $this->hotTopic;
        }
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotTopicSummariesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['hotTopic'])) {
            $model->hotTopic = $map['hotTopic'];
        }
        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
