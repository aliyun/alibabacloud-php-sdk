<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateIssueCategoryReportRelationRequest\relationModelList;
use AlibabaCloud\Tea\Model;

class CreateIssueCategoryReportRelationRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var relationModelList[]
     */
    public $relationModelList;
    protected $_name = [
        'regionId'          => 'RegionId',
        'relationModelList' => 'RelationModelList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->relationModelList) {
            $res['RelationModelList'] = [];
            if (null !== $this->relationModelList && \is_array($this->relationModelList)) {
                $n = 0;
                foreach ($this->relationModelList as $item) {
                    $res['RelationModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIssueCategoryReportRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RelationModelList'])) {
            if (!empty($map['RelationModelList'])) {
                $model->relationModelList = [];
                $n                        = 0;
                foreach ($map['RelationModelList'] as $item) {
                    $model->relationModelList[$n++] = null !== $item ? relationModelList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
