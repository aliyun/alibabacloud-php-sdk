<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateStereoImageDepthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://virutalbuy-public.oss-cn-hangzhou.aliyuncs.com/StereoDepthPrediction/972ebf03-bd8c-47f6-9281-383fef3fff09/disparity.npy
     *
     * @var string
     */
    public $disparityMapURL;

    /**
     * @example http://virutalbuy-public.oss-cn-hangzhou.aliyuncs.com/StereoDepthPrediction/972ebf03-bd8c-47f6-9281-383fef3fff09/disparity.png
     *
     * @var string
     */
    public $disparityVisURL;
    protected $_name = [
        'disparityMapURL' => 'DisparityMapURL',
        'disparityVisURL' => 'DisparityVisURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disparityMapURL) {
            $res['DisparityMapURL'] = $this->disparityMapURL;
        }
        if (null !== $this->disparityVisURL) {
            $res['DisparityVisURL'] = $this->disparityVisURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisparityMapURL'])) {
            $model->disparityMapURL = $map['DisparityMapURL'];
        }
        if (isset($map['DisparityVisURL'])) {
            $model->disparityVisURL = $map['DisparityVisURL'];
        }

        return $model;
    }
}
