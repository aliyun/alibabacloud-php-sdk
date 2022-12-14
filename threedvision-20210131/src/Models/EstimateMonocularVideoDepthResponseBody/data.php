<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models\EstimateMonocularVideoDepthResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://virutalbuy-public.oss-cn-hangzhou.aliyuncs.com/VideoDepthPrediction/5c36dc69-2937-440e-ac34-67a00651a753/depths.npy
     *
     * @var string
     */
    public $depthUrl;

    /**
     * @example http://virutalbuy-public.oss-cn-hangzhou.aliyuncs.com/VideoDepthPrediction/5c36dc69-2937-440e-ac34-67a00651a753/depths_vis.avi
     *
     * @var string
     */
    public $depthVisUrl;
    protected $_name = [
        'depthUrl'    => 'DepthUrl',
        'depthVisUrl' => 'DepthVisUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->depthUrl) {
            $res['DepthUrl'] = $this->depthUrl;
        }
        if (null !== $this->depthVisUrl) {
            $res['DepthVisUrl'] = $this->depthVisUrl;
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
        if (isset($map['DepthUrl'])) {
            $model->depthUrl = $map['DepthUrl'];
        }
        if (isset($map['DepthVisUrl'])) {
            $model->depthVisUrl = $map['DepthVisUrl'];
        }

        return $model;
    }
}
