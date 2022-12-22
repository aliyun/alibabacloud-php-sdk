<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetTextLogoListResponseBody;

use AlibabaCloud\Tea\Model;

class logos extends Model
{
    /**
     * @example 812f1855fa8d2b1e31ec2653eebe0702
     *
     * @var string
     */
    public $goodsId;

    /**
     * @example https://edu.aliyun.com/clouder/gdpr/showResourceAlert?token=fftdXk12sf3dHrp%2BukTT87K%2BDXM%3D
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'goodsId' => 'GoodsId',
        'url'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->goodsId) {
            $res['GoodsId'] = $this->goodsId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
