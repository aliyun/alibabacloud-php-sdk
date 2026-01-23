<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateSecurityClassifyRequest\createCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateSecurityClassifyRequest\createCommand\advancedConditionList\optionList;

class advancedConditionList extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $operate;

    /**
     * @var optionList[]
     */
    public $optionList;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var string[]
     */
    public $valueList;
    protected $_name = [
        'id' => 'Id',
        'operate' => 'Operate',
        'optionList' => 'OptionList',
        'parentId' => 'ParentId',
        'property' => 'Property',
        'relation' => 'Relation',
        'valueList' => 'ValueList',
    ];

    public function validate()
    {
        if (\is_array($this->optionList)) {
            Model::validateArray($this->optionList);
        }
        if (\is_array($this->valueList)) {
            Model::validateArray($this->valueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
        }

        if (null !== $this->optionList) {
            if (\is_array($this->optionList)) {
                $res['OptionList'] = [];
                $n1 = 0;
                foreach ($this->optionList as $item1) {
                    $res['OptionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }

        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }

        if (null !== $this->valueList) {
            if (\is_array($this->valueList)) {
                $res['ValueList'] = [];
                $n1 = 0;
                foreach ($this->valueList as $item1) {
                    $res['ValueList'][$n1] = $item1;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }

        if (isset($map['OptionList'])) {
            if (!empty($map['OptionList'])) {
                $model->optionList = [];
                $n1 = 0;
                foreach ($map['OptionList'] as $item1) {
                    $model->optionList[$n1] = optionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }

        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }

        if (isset($map['ValueList'])) {
            if (!empty($map['ValueList'])) {
                $model->valueList = [];
                $n1 = 0;
                foreach ($map['ValueList'] as $item1) {
                    $model->valueList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
