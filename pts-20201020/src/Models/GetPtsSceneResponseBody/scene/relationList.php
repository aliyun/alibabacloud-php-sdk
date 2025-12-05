<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\apiList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene\relationList\fileParameterExplainList;

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
     * @var string
     */
    public $relationId;

    /**
     * @var string
     */
    public $relationName;
    protected $_name = [
        'apiList' => 'ApiList',
        'fileParameterExplainList' => 'FileParameterExplainList',
        'relationId' => 'RelationId',
        'relationName' => 'RelationName',
    ];

    public function validate()
    {
        if (\is_array($this->apiList)) {
            Model::validateArray($this->apiList);
        }
        if (\is_array($this->fileParameterExplainList)) {
            Model::validateArray($this->fileParameterExplainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiList) {
            if (\is_array($this->apiList)) {
                $res['ApiList'] = [];
                $n1 = 0;
                foreach ($this->apiList as $item1) {
                    $res['ApiList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileParameterExplainList) {
            if (\is_array($this->fileParameterExplainList)) {
                $res['FileParameterExplainList'] = [];
                $n1 = 0;
                foreach ($this->fileParameterExplainList as $item1) {
                    $res['FileParameterExplainList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n1 = 0;
                foreach ($map['ApiList'] as $item1) {
                    $model->apiList[$n1] = apiList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FileParameterExplainList'])) {
            if (!empty($map['FileParameterExplainList'])) {
                $model->fileParameterExplainList = [];
                $n1 = 0;
                foreach ($map['FileParameterExplainList'] as $item1) {
                    $model->fileParameterExplainList[$n1] = fileParameterExplainList::fromMap($item1);
                    ++$n1;
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
