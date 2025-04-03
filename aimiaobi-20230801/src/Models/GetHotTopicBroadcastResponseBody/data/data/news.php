<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\news\comments;

class news extends Model
{
    /**
     * @var string
     */
    public $analysisCategory;

    /**
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
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $dt;

    /**
     * @var string
     */
    public $hotTopic;

    /**
     * @var string[]
     */
    public $imgList;

    /**
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $uuid;

    /**
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

    public function validate()
    {
        if (\is_array($this->category)) {
            Model::validateArray($this->category);
        }
        if (\is_array($this->comments)) {
            Model::validateArray($this->comments);
        }
        if (\is_array($this->imgList)) {
            Model::validateArray($this->imgList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->category)) {
                $res['Category'] = [];
                $n1 = 0;
                foreach ($this->category as $item1) {
                    $res['Category'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->comments) {
            if (\is_array($this->comments)) {
                $res['Comments'] = [];
                $n1 = 0;
                foreach ($this->comments as $item1) {
                    $res['Comments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->imgList)) {
                $res['ImgList'] = [];
                $n1 = 0;
                foreach ($this->imgList as $item1) {
                    $res['ImgList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->category = [];
                $n1 = 0;
                foreach ($map['Category'] as $item1) {
                    $model->category[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Comments'])) {
            if (!empty($map['Comments'])) {
                $model->comments = [];
                $n1 = 0;
                foreach ($map['Comments'] as $item1) {
                    $model->comments[$n1++] = comments::fromMap($item1);
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
                $model->imgList = [];
                $n1 = 0;
                foreach ($map['ImgList'] as $item1) {
                    $model->imgList[$n1++] = $item1;
                }
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
