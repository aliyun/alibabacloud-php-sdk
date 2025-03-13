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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListHotViewPointsResponseBody\data;

use AlibabaCloud\Tea\Model;

class news extends Model
{
    /**
     * @example 作者
     *
     * @var string
     */
    public $author;

    /**
     * @example 文章内容
     *
     * @var string
     */
    public $content;

    /**
     * @example xxxxx
     *
     * @var string
     */
    public $docId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $docUuid;

    /**
     * @example https://www.example.com/aaa.png
     *
     * @var string[]
     */
    public $imageUrls;

    /**
     * @example 2024-01-22 10:29:00
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 新浪
     *
     * @var string
     */
    public $source;

    /**
     * @example 文章摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example ["标签1","标签2"]
     *
     * @var string[]
     */
    public $tags;

    /**
     * @example 文章标题
     *
     * @var string
     */
    public $title;

    /**
     * @example 文章主题
     *
     * @var string
     */
    public $topic;

    /**
     * @example https://www.example.com/aaa.docx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'author' => 'Author',
        'content' => 'Content',
        'docId' => 'DocId',
        'docUuid' => 'DocUuid',
        'imageUrls' => 'ImageUrls',
        'pubTime' => 'PubTime',
        'source' => 'Source',
        'summary' => 'Summary',
        'tags' => 'Tags',
        'title' => 'Title',
        'topic' => 'Topic',
        'url' => 'Url',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docUuid) {
            $res['DocUuid'] = $this->docUuid;
        }
        if (null !== $this->imageUrls) {
            $res['ImageUrls'] = $this->imageUrls;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return news
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocUuid'])) {
            $model->docUuid = $map['DocUuid'];
        }
        if (isset($map['ImageUrls'])) {
            if (!empty($map['ImageUrls'])) {
                $model->imageUrls = $map['ImageUrls'];
            }
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
