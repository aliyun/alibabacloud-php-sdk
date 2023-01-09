<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class UpdatePtsSceneBaseLineShrinkRequest extends Model
{
    /**
     * @example [{"avgRt":1,"avgTps":1,"failCountBiz":1,"failCountReq":182381,"id":362447,"maxRt":3051,"minRt":0,"name":"1-1","seg50Rt":1,"seg75Rt":1,"seg90Rt":1,"seg99Rt":3,"successRateBiz":1,"successRateReq":0,"timingConnAvg":0},{"avgRt":1.06,"avgTps":1,"failCountBiz":0,"failCountReq":151143,"id":362446,"maxRt":3068,"minRt":0,"name":"dd","seg50Rt":1,"seg75Rt":1,"seg90Rt":1,"seg99Rt":2,"successRateBiz":1,"successRateReq":0}]
     *
     * @var string
     */
    public $apiBaselinesShrink;

    /**
     * @example {"avgRt":1,"avgTps":1,"failCountBiz":1,"failCountReq":1,"seg90Rt":1,"seg99Rt":2,"successRateBiz":0.5,"successRateReq":1}
     *
     * @var string
     */
    public $sceneBaselineShrink;

    /**
     * @example NB54CV
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'apiBaselinesShrink'  => 'ApiBaselines',
        'sceneBaselineShrink' => 'SceneBaseline',
        'sceneId'             => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiBaselinesShrink) {
            $res['ApiBaselines'] = $this->apiBaselinesShrink;
        }
        if (null !== $this->sceneBaselineShrink) {
            $res['SceneBaseline'] = $this->sceneBaselineShrink;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePtsSceneBaseLineShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiBaselines'])) {
            $model->apiBaselinesShrink = $map['ApiBaselines'];
        }
        if (isset($map['SceneBaseline'])) {
            $model->sceneBaselineShrink = $map['SceneBaseline'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
