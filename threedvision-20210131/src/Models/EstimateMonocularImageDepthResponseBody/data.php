<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateMonocularImageDepthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://virutalbuy-public.oss-cn-hangzhou.aliyuncs.com/DepthPrediction/da6ef49a-afef-43c8-8855-4827cde7c152/depth.png
     *
     * @var string
     */
    public $depthMapUrl;

    /**
     * @example http://virutalbuy-public.oss-cn-hangzhou.aliyuncs.com/DepthPrediction/da6ef49a-afef-43c8-8855-4827cde7c152/color.png
     *
     * @var string
     */
    public $depthToColorUrl;
    protected $_name = [
        'depthMapUrl'     => 'DepthMapUrl',
        'depthToColorUrl' => 'DepthToColorUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depthMapUrl) {
            $res['DepthMapUrl'] = $this->depthMapUrl;
        }
        if (null !== $this->depthToColorUrl) {
            $res['DepthToColorUrl'] = $this->depthToColorUrl;
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
        if (isset($map['DepthMapUrl'])) {
            $model->depthMapUrl = $map['DepthMapUrl'];
        }
        if (isset($map['DepthToColorUrl'])) {
            $model->depthToColorUrl = $map['DepthToColorUrl'];
        }

        return $model;
    }
}
