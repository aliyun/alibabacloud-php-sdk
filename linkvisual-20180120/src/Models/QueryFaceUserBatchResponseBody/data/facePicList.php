<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserBatchResponseBody\data;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryFaceUserBatchResponseBody\data\facePicList\featureDTOList;
use AlibabaCloud\Tea\Model;

class facePicList extends Model
{
    /**
     * @example TestFaceMd5
     *
     * @var string
     */
    public $faceMd5;

    /**
     * @example https://example.com/test.jpeg
     *
     * @var string
     */
    public $faceUrl;

    /**
     * @var featureDTOList[]
     */
    public $featureDTOList;
    protected $_name = [
        'faceMd5'        => 'FaceMd5',
        'faceUrl'        => 'FaceUrl',
        'featureDTOList' => 'FeatureDTOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceMd5) {
            $res['FaceMd5'] = $this->faceMd5;
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->featureDTOList) {
            $res['FeatureDTOList'] = [];
            if (null !== $this->featureDTOList && \is_array($this->featureDTOList)) {
                $n = 0;
                foreach ($this->featureDTOList as $item) {
                    $res['FeatureDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return facePicList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceMd5'])) {
            $model->faceMd5 = $map['FaceMd5'];
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['FeatureDTOList'])) {
            if (!empty($map['FeatureDTOList'])) {
                $model->featureDTOList = [];
                $n                     = 0;
                foreach ($map['FeatureDTOList'] as $item) {
                    $model->featureDTOList[$n++] = null !== $item ? featureDTOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
