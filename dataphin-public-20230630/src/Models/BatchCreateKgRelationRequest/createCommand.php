<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchCreateKgRelationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchCreateKgRelationRequest\createCommand\relationList;

class createCommand extends Model
{
    /**
     * @var relationList[]
     */
    public $relationList;
    protected $_name = [
        'relationList' => 'RelationList',
    ];

    public function validate()
    {
        if (\is_array($this->relationList)) {
            Model::validateArray($this->relationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relationList) {
            if (\is_array($this->relationList)) {
                $res['RelationList'] = [];
                $n1 = 0;
                foreach ($this->relationList as $item1) {
                    $res['RelationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RelationList'])) {
            if (!empty($map['RelationList'])) {
                $model->relationList = [];
                $n1 = 0;
                foreach ($map['RelationList'] as $item1) {
                    $model->relationList[$n1] = relationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
