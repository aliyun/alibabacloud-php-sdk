<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList\entityTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList\relationTypeList;
use AlibabaCloud\Tea\Model;

class infoList extends Model
{
    /**
     * @description The information about the entities.
     *
     * @var entityTypeList[]
     */
    public $entityTypeList;

    /**
     * @description The information about the edges.
     *
     * @var relationTypeList[]
     */
    public $relationTypeList;
    protected $_name = [
        'entityTypeList'   => 'EntityTypeList',
        'relationTypeList' => 'RelationTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityTypeList) {
            $res['EntityTypeList'] = [];
            if (null !== $this->entityTypeList && \is_array($this->entityTypeList)) {
                $n = 0;
                foreach ($this->entityTypeList as $item) {
                    $res['EntityTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationTypeList) {
            $res['RelationTypeList'] = [];
            if (null !== $this->relationTypeList && \is_array($this->relationTypeList)) {
                $n = 0;
                foreach ($this->relationTypeList as $item) {
                    $res['RelationTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return infoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityTypeList'])) {
            if (!empty($map['EntityTypeList'])) {
                $model->entityTypeList = [];
                $n                     = 0;
                foreach ($map['EntityTypeList'] as $item) {
                    $model->entityTypeList[$n++] = null !== $item ? entityTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelationTypeList'])) {
            if (!empty($map['RelationTypeList'])) {
                $model->relationTypeList = [];
                $n                       = 0;
                foreach ($map['RelationTypeList'] as $item) {
                    $model->relationTypeList[$n++] = null !== $item ? relationTypeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
