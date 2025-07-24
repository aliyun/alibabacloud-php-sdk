<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class WeiboItem extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example weibo_strong
     *
     * @var string
     */
    public $cardType;

    /**
     * @example https://m.weibo.cn/u/7761793874?luicode=20000061&lfid=5024099350350075
     *
     * @var string
     */
    public $homepageLink;

    /**
     * @description This parameter is required.
     *
     * @example 【小调查：你会买<em>小米SU7</em>吗？】#小米SU7路测覆盖300多城市#4月17日，@小米汽车 发文称SU7道路测试覆盖全国300多个城市，涵盖极寒，极热天气，总里程数高达540万公里，目前仍在进行中。  网页链接
     *
     * @var string
     */
    public $htmlSnippet;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @description This parameter is required.
     *
     * @example https://m.weibo.cn/detail/5024099350350075?wm=90194_90009
     *
     * @var string
     */
    public $link;

    /**
     * @description This parameter is required.
     *
     * @example 1小时前
     *
     * @var string
     */
    public $publishDisplayTime;

    /**
     * @example 白鹿科技
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'cardType' => 'cardType',
        'homepageLink' => 'homepageLink',
        'htmlSnippet' => 'htmlSnippet',
        'images' => 'images',
        'link' => 'link',
        'publishDisplayTime' => 'publishDisplayTime',
        'username' => 'username',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardType) {
            $res['cardType'] = $this->cardType;
        }
        if (null !== $this->homepageLink) {
            $res['homepageLink'] = $this->homepageLink;
        }
        if (null !== $this->htmlSnippet) {
            $res['htmlSnippet'] = $this->htmlSnippet;
        }
        if (null !== $this->images) {
            $res['images'] = $this->images;
        }
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }
        if (null !== $this->publishDisplayTime) {
            $res['publishDisplayTime'] = $this->publishDisplayTime;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WeiboItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardType'])) {
            $model->cardType = $map['cardType'];
        }
        if (isset($map['homepageLink'])) {
            $model->homepageLink = $map['homepageLink'];
        }
        if (isset($map['htmlSnippet'])) {
            $model->htmlSnippet = $map['htmlSnippet'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = $map['images'];
            }
        }
        if (isset($map['link'])) {
            $model->link = $map['link'];
        }
        if (isset($map['publishDisplayTime'])) {
            $model->publishDisplayTime = $map['publishDisplayTime'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
