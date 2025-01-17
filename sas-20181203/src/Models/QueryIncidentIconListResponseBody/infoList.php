<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList\entityTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentIconListResponseBody\infoList\relationTypeList;

class infoList extends Model
{
    /**
     * @var entityTypeList[]
     */
    public $entityTypeList;
    /**
     * @var relationTypeList[]
     */
    public $relationTypeList;
    protected $_name = [
        'entityTypeList'   => 'EntityTypeList',
        'relationTypeList' => 'RelationTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->entityTypeList)) {
            Model::validateArray($this->entityTypeList);
        }
        if (\is_array($this->relationTypeList)) {
            Model::validateArray($this->relationTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityTypeList) {
            if (\is_array($this->entityTypeList)) {
                $res['EntityTypeList'] = [];
                $n1                    = 0;
                foreach ($this->entityTypeList as $item1) {
                    $res['EntityTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->relationTypeList) {
            if (\is_array($this->relationTypeList)) {
                $res['RelationTypeList'] = [];
                $n1                      = 0;
                foreach ($this->relationTypeList as $item1) {
                    $res['RelationTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['EntityTypeList'])) {
            if (!empty($map['EntityTypeList'])) {
                $model->entityTypeList = [];
                $n1                    = 0;
                foreach ($map['EntityTypeList'] as $item1) {
                    $model->entityTypeList[$n1++] = entityTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['RelationTypeList'])) {
            if (!empty($map['RelationTypeList'])) {
                $model->relationTypeList = [];
                $n1                      = 0;
                foreach ($map['RelationTypeList'] as $item1) {
                    $model->relationTypeList[$n1++] = relationTypeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
