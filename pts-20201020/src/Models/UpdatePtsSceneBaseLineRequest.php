<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Tea\Model;

class UpdatePtsSceneBaseLineRequest extends Model
{
    /**
     * @example [{"avgRt":1,"avgTps":1,"failCountBiz":1,"failCountReq":182381,"id":362447,"maxRt":3051,"minRt":0,"name":"1-1","seg50Rt":1,"seg75Rt":1,"seg90Rt":1,"seg99Rt":3,"successRateBiz":1,"successRateReq":0,"timingConnAvg":0},{"avgRt":1.06,"avgTps":1,"failCountBiz":0,"failCountReq":151143,"id":362446,"maxRt":3068,"minRt":0,"name":"dd","seg50Rt":1,"seg75Rt":1,"seg90Rt":1,"seg99Rt":2,"successRateBiz":1,"successRateReq":0}]
     *
     * @var mixed[]
     */
    public $apiBaselines;

    /**
     * @example {"avgRt":1,"avgTps":1,"failCountBiz":1,"failCountReq":1,"seg90Rt":1,"seg99Rt":2,"successRateBiz":0.5,"successRateReq":1}
     *
     * @var mixed[]
     */
    public $sceneBaseline;

    /**
     * @example NB54CV
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'apiBaselines'  => 'ApiBaselines',
        'sceneBaseline' => 'SceneBaseline',
        'sceneId'       => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiBaselines) {
            $res['ApiBaselines'] = $this->apiBaselines;
        }
        if (null !== $this->sceneBaseline) {
            $res['SceneBaseline'] = $this->sceneBaseline;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePtsSceneBaseLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiBaselines'])) {
            $model->apiBaselines = $map['ApiBaselines'];
        }
        if (isset($map['SceneBaseline'])) {
            $model->sceneBaseline = $map['SceneBaseline'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
