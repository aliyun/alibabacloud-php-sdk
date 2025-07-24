<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class GlobalPageItem extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example https://baijiahao.baidu.com/s?id=1787881554557805096
     *
     * @var string
     */
    public $link;

    /**
     * @example 100km/h-0制动能力上，仅有33.3m，不黑不吹，单看这个，小米SU7确实表现不错。而续航方面，101kWh电池容量，实现CLTC续航800km，还有现5分钟补能220km，15分钟补能510km的800V高压平台。而在...
     *
     * @var string
     */
    public $snippet;

    /**
     * @description This parameter is required.
     *
     * @example 小米SU7售价22.99万元起 高管亲自辟谣：发布前不会有价格
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'link' => 'link',
        'snippet' => 'snippet',
        'title' => 'title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }
        if (null !== $this->snippet) {
            $res['snippet'] = $this->snippet;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GlobalPageItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['link'])) {
            $model->link = $map['link'];
        }
        if (isset($map['snippet'])) {
            $model->snippet = $map['snippet'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
