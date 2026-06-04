<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppSeoTrendsResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $baiduIndexTrends;

    /**
     * @var string
     */
    public $bingIndexTrends;

    /**
     * @var string
     */
    public $googleIndexTrends;
    protected $_name = [
        'baiduIndexTrends' => 'BaiduIndexTrends',
        'bingIndexTrends' => 'BingIndexTrends',
        'googleIndexTrends' => 'GoogleIndexTrends',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baiduIndexTrends) {
            $res['BaiduIndexTrends'] = $this->baiduIndexTrends;
        }

        if (null !== $this->bingIndexTrends) {
            $res['BingIndexTrends'] = $this->bingIndexTrends;
        }

        if (null !== $this->googleIndexTrends) {
            $res['GoogleIndexTrends'] = $this->googleIndexTrends;
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
        if (isset($map['BaiduIndexTrends'])) {
            $model->baiduIndexTrends = $map['BaiduIndexTrends'];
        }

        if (isset($map['BingIndexTrends'])) {
            $model->bingIndexTrends = $map['BingIndexTrends'];
        }

        if (isset($map['GoogleIndexTrends'])) {
            $model->googleIndexTrends = $map['GoogleIndexTrends'];
        }

        return $model;
    }
}
