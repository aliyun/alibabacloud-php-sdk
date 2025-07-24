<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

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
     * @example https://s2.zimgs.cn/ims?kt=url&at=smstruct&key=aHR0cHM6Ly9ndy5hbGljZG4uY29tL0wxLzcyMy8xNTY1MjU2NjAwLzJhL2YwL2I0LzJhZjBiNDQxMGI5YmVlMDVjOGVlNGJmODk3MTNkNTFjLnBuZw==&sign=yx:CUlNNQVJQjFrk3Kxt2F3KWhTOFU=&tv=400_400
     *
     * @var string
     */
    public $hostLogo;

    /**
     * @example 新华网
     *
     * @var string
     */
    public $hostname;

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
     * 在	发布	会	现场	，	雷军	直接	称	小米	S	U	7	对	标	特斯拉	保时捷	，	有	100	项	行业	领先	，	可见	“	遥遥	领先	”	已经	不再	是	华为	专利	了	？
     *
     * 而	在	介绍	技术	时	，	雷军	也	从	电机	、	电池	、	大	压铸	、	自动	驾驶	、	智能	座舱	等	五	大	方面	展开	，	充分	展示	了	小米	汽车	的	技术	以及	技术	储备	，		 		能	堆	的	料	，	全都	堆	上去	了	…	…
     * 大家	比较	感	兴趣	的	性能	方面	，	2	.	78	s	的	0	-	100	km	/	h	加速	，	265	km	/	h	的	最高	时速
     *
     * @var string
     */
    public $mainText;

    /**
     * @var string
     */
    public $markdownText;

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
     * @example 权威媒体
     *
     * @var string
     */
    public $siteLabel;

    /**
     * @example 100km/h-0制动能力上，仅有33.3m，不黑不吹，单看这个，小米SU7确实表现不错。而续航方面，101kWh电池容量，实现CLTC续航800km，还有现5分钟补能220km，15分钟补能510km的800V高压平台。而在...
     *
     * @var string
     */
    public $snippet;

    /**
     * @var string
     */
    public $summary;

    /**
     * @description This parameter is required.
     *
     * @example 小米SU7售价22.99万元起 高管亲自辟谣：发布前不会有价格
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'cardType' => 'cardType',
        'displayLink' => 'displayLink',
        'hostLogo' => 'hostLogo',
        'hostname' => 'hostname',
        'htmlSnippet' => 'htmlSnippet',
        'htmlTitle' => 'htmlTitle',
        'images' => 'images',
        'link' => 'link',
        'mainText' => 'mainText',
        'markdownText' => 'markdownText',
        'mime' => 'mime',
        'pageMap' => 'pageMap',
        'publishTime' => 'publishTime',
        'score' => 'score',
        'siteLabel' => 'siteLabel',
        'snippet' => 'snippet',
        'summary' => 'summary',
        'title' => 'title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardType) {
            $res['cardType'] = $this->cardType;
        }
        if (null !== $this->displayLink) {
            $res['displayLink'] = $this->displayLink;
        }
        if (null !== $this->hostLogo) {
            $res['hostLogo'] = $this->hostLogo;
        }
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
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
        if (null !== $this->markdownText) {
            $res['markdownText'] = $this->markdownText;
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
        if (null !== $this->siteLabel) {
            $res['siteLabel'] = $this->siteLabel;
        }
        if (null !== $this->snippet) {
            $res['snippet'] = $this->snippet;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
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
        if (isset($map['hostLogo'])) {
            $model->hostLogo = $map['hostLogo'];
        }
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
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
                $n = 0;
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
        if (isset($map['markdownText'])) {
            $model->markdownText = $map['markdownText'];
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
        if (isset($map['siteLabel'])) {
            $model->siteLabel = $map['siteLabel'];
        }
        if (isset($map['snippet'])) {
            $model->snippet = $map['snippet'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
