<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkedmallRetrieval\V20240501\Models;

use AlibabaCloud\Tea\Model;

class ScorePageItem extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example structure_web_info
     *
     * @var string
     */
    public $cardType;

    /**
     * @description This parameter is required.
     *
     * @example baijiahao.baidu.com
     *
     * @var string
     */
    public $displayLink;

    /**
     * @description This parameter is required.
     *
     * @example 100km/h-0制动能力上，仅有33.3m，不黑不吹，单看这个，<em>小米SU7</em>确实表现不错。而续航方面，101kWh电池容量，实现CLTC续航800km，还有现5分钟补能220km，15分钟补能510km的800V高压平台。而在...
     *
     * @var string
     */
    public $htmlSnippet;

    /**
     * @description This parameter is required.
     *
     * @example <em>小米</em>SU7售价22.99万元起 高管亲自辟谣：发布前不会有<em>价格</em>-百家号
     *
     * @var string
     */
    public $htmlTitle;

    /**
     * @var IncludeImage[]
     */
    public $images;

    /**
     * @description This parameter is required.
     *
     * @example https://baijiahao.baidu.com/s?id=1787881554557805096
     *
     * @var string
     */
    public $link;

    /**
     * @example 昨天	，	小米	汽车	没有	发布	，	但	相关	的	信息	透露	的	差	不	多	了	。
     * 大家	比较	感	兴趣	的	性能	方面	，	2	.	78	s	的	0	-	100	km	/	h	加速	，	265	km	/	h	的	最高	时速
     * @var string
     */
    public $mainText;

    /**
     * @example text/html
     *
     * @var string
     */
    public $mime;

    /**
     * @var string[]
     */
    public $pageMap;

    /**
     * @description This parameter is required.
     *
     * @example 1704426524000
     *
     * @var int
     */
    public $publishTime;

    /**
     * @example 0.234325235
     *
     * @var float
     */
    public $score;

    /**
     * @description This parameter is required.
     *
     * @example 小米SU7售价22.99万元起 高管亲自辟谣：发布前不会有价格
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'cardType'    => 'cardType',
        'displayLink' => 'displayLink',
        'htmlSnippet' => 'htmlSnippet',
        'htmlTitle'   => 'htmlTitle',
        'images'      => 'images',
        'link'        => 'link',
        'mainText'    => 'mainText',
        'mime'        => 'mime',
        'pageMap'     => 'pageMap',
        'publishTime' => 'publishTime',
        'score'       => 'score',
        'title'       => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardType) {
            $res['cardType'] = $this->cardType;
        }
        if (null !== $this->displayLink) {
            $res['displayLink'] = $this->displayLink;
        }
        if (null !== $this->htmlSnippet) {
            $res['htmlSnippet'] = $this->htmlSnippet;
        }
        if (null !== $this->htmlTitle) {
            $res['htmlTitle'] = $this->htmlTitle;
        }
        if (null !== $this->images) {
            $res['images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }
        if (null !== $this->mainText) {
            $res['mainText'] = $this->mainText;
        }
        if (null !== $this->mime) {
            $res['mime'] = $this->mime;
        }
        if (null !== $this->pageMap) {
            $res['pageMap'] = $this->pageMap;
        }
        if (null !== $this->publishTime) {
            $res['publishTime'] = $this->publishTime;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScorePageItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardType'])) {
            $model->cardType = $map['cardType'];
        }
        if (isset($map['displayLink'])) {
            $model->displayLink = $map['displayLink'];
        }
        if (isset($map['htmlSnippet'])) {
            $model->htmlSnippet = $map['htmlSnippet'];
        }
        if (isset($map['htmlTitle'])) {
            $model->htmlTitle = $map['htmlTitle'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['images'] as $item) {
                    $model->images[$n++] = null !== $item ? IncludeImage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['link'])) {
            $model->link = $map['link'];
        }
        if (isset($map['mainText'])) {
            $model->mainText = $map['mainText'];
        }
        if (isset($map['mime'])) {
            $model->mime = $map['mime'];
        }
        if (isset($map['pageMap'])) {
            $model->pageMap = $map['pageMap'];
        }
        if (isset($map['publishTime'])) {
            $model->publishTime = $map['publishTime'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
