<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\apiList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\fileParameterExplainList;
use AlibabaCloud\Tea\Model;

class relationList extends Model
{
    /**
     * @var apiList[]
     */
    public $apiList;

    /**
     * @var fileParameterExplainList[]
     */
    public $fileParameterExplainList;

    /**
     * @example HNBGS7M
     *
     * @var string
     */
    public $relationId;

    /**
     * @var string
     */
    public $relationName;
    protected $_name = [
        'apiList'                  => 'ApiList',
        'fileParameterExplainList' => 'FileParameterExplainList',
        'relationId'               => 'RelationId',
        'relationName'             => 'RelationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiList) {
            $res['ApiList'] = [];
            if (null !== $this->apiList && \is_array($this->apiList)) {
                $n = 0;
                foreach ($this->apiList as $item) {
                    $res['ApiList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileParameterExplainList) {
            $res['FileParameterExplainList'] = [];
            if (null !== $this->fileParameterExplainList && \is_array($this->fileParameterExplainList)) {
                $n = 0;
                foreach ($this->fileParameterExplainList as $item) {
                    $res['FileParameterExplainList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->relationName) {
            $res['RelationName'] = $this->relationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n              = 0;
                foreach ($map['ApiList'] as $item) {
                    $model->apiList[$n++] = null !== $item ? apiList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileParameterExplainList'])) {
            if (!empty($map['FileParameterExplainList'])) {
                $model->fileParameterExplainList = [];
                $n                               = 0;
                foreach ($map['FileParameterExplainList'] as $item) {
                    $model->fileParameterExplainList[$n++] = null !== $item ? fileParameterExplainList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['RelationName'])) {
            $model->relationName = $map['RelationName'];
        }

        return $model;
    }
}
