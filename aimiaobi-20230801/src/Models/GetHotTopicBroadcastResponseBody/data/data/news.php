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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\news\comments;
use AlibabaCloud\Tea\Model;

class news extends Model
{
    /**
     * @var string
     */
    public $analysisCategory;

    /**
     * @example 聚合后热点名称
     *
     * @var string
     */
    public $analysisTopic;

    /**
     * @var string
     */
    public $author;

    /**
     * @var string[]
     */
    public $category;

    /**
     * @var comments[]
     */
    public $comments;

    /**
     * @var string
     */
    public $content;

    /**
     * @example 2024-06-13 08:45:05
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @example 2024111110
     *
     * @var string
     */
    public $dt;

    /**
     * @example 原始热点名称
     *
     * @var string
     */
    public $hotTopic;

    /**
     * @var string[]
     */
    public $imgList;

    /**
     * @description logo
     *
     * @example https://www.example.com/a.png
     *
     * @var string
     */
    public $logo;

    /**
     * @example 2024-10-10 12:12:00
     *
     * @var string
     */
    public $pubTime;

    /**
     * @example 摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @example http://www.example.com/a.png
     *
     * @var string
     */
    public $url;

    /**
     * @example 主键ID
     *
     * @var string
     */
    public $uuid;

    /**
     * @example 网站
     *
     * @var string
     */
    public $website;
    protected $_name = [
        'analysisCategory' => 'AnalysisCategory',
        'analysisTopic' => 'AnalysisTopic',
        'author' => 'Author',
        'category' => 'Category',
        'comments' => 'Comments',
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'domain' => 'Domain',
        'dt' => 'Dt',
        'hotTopic' => 'HotTopic',
        'imgList' => 'ImgList',
        'logo' => 'Logo',
        'pubTime' => 'PubTime',
        'summary' => 'Summary',
        'title' => 'Title',
        'url' => 'Url',
        'uuid' => 'Uuid',
        'website' => 'Website',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisCategory) {
            $res['AnalysisCategory'] = $this->analysisCategory;
        }
        if (null !== $this->analysisTopic) {
            $res['AnalysisTopic'] = $this->analysisTopic;
        }
        if (null !== $this->author) {
            $res['Author'] = $this->author;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->comments) {
            $res['Comments'] = [];
            if (null !== $this->comments && \is_array($this->comments)) {
                $n = 0;
                foreach ($this->comments as $item) {
                    $res['Comments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->dt) {
            $res['Dt'] = $this->dt;
        }
        if (null !== $this->hotTopic) {
            $res['HotTopic'] = $this->hotTopic;
        }
        if (null !== $this->imgList) {
            $res['ImgList'] = $this->imgList;
        }
        if (null !== $this->logo) {
            $res['Logo'] = $this->logo;
        }
        if (null !== $this->pubTime) {
            $res['PubTime'] = $this->pubTime;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->website) {
            $res['Website'] = $this->website;
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
        if (isset($map['AnalysisCategory'])) {
            $model->analysisCategory = $map['AnalysisCategory'];
        }
        if (isset($map['AnalysisTopic'])) {
            $model->analysisTopic = $map['AnalysisTopic'];
        }
        if (isset($map['Author'])) {
            $model->author = $map['Author'];
        }
        if (isset($map['Category'])) {
            if (!empty($map['Category'])) {
                $model->category = $map['Category'];
            }
        }
        if (isset($map['Comments'])) {
            if (!empty($map['Comments'])) {
                $model->comments = [];
                $n = 0;
                foreach ($map['Comments'] as $item) {
                    $model->comments[$n++] = null !== $item ? comments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Dt'])) {
            $model->dt = $map['Dt'];
        }
        if (isset($map['HotTopic'])) {
            $model->hotTopic = $map['HotTopic'];
        }
        if (isset($map['ImgList'])) {
            if (!empty($map['ImgList'])) {
                $model->imgList = $map['ImgList'];
            }
        }
        if (isset($map['Logo'])) {
            $model->logo = $map['Logo'];
        }
        if (isset($map['PubTime'])) {
            $model->pubTime = $map['PubTime'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Website'])) {
            $model->website = $map['Website'];
        }

        return $model;
    }
}
