<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\Tea\Model;

class monitorConfig extends Model
{
    /**
     * @var string
     */
    public $atMobiles;

    /**
     * @var string
     */
    public $atUserIds;

    /**
     * @var string
     */
    public $isAtAll;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'atMobiles' => 'at_mobiles',
        'atUserIds' => 'at_user_ids',
        'isAtAll'   => 'is_at_all',
        'keyword'   => 'keyword',
        'url'       => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->atMobiles) {
            $res['at_mobiles'] = $this->atMobiles;
        }
        if (null !== $this->atUserIds) {
            $res['at_user_ids'] = $this->atUserIds;
        }
        if (null !== $this->isAtAll) {
            $res['is_at_all'] = $this->isAtAll;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['at_mobiles'])) {
            $model->atMobiles = $map['at_mobiles'];
        }
        if (isset($map['at_user_ids'])) {
            $model->atUserIds = $map['at_user_ids'];
        }
        if (isset($map['is_at_all'])) {
            $model->isAtAll = $map['is_at_all'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
