<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddAssetSelectionCriteriaRequest\targetOperationList;

class AddAssetSelectionCriteriaRequest extends Model
{
    /**
     * @var string
     */
    public $criteria;

    /**
     * @var string
     */
    public $criteriaOperation;

    /**
     * @var string
     */
    public $selectionKey;

    /**
     * @var targetOperationList[]
     */
    public $targetOperationList;
    protected $_name = [
        'criteria' => 'Criteria',
        'criteriaOperation' => 'CriteriaOperation',
        'selectionKey' => 'SelectionKey',
        'targetOperationList' => 'TargetOperationList',
    ];

    public function validate()
    {
        if (\is_array($this->targetOperationList)) {
            Model::validateArray($this->targetOperationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->criteriaOperation) {
            $res['CriteriaOperation'] = $this->criteriaOperation;
        }

        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }

        if (null !== $this->targetOperationList) {
            if (\is_array($this->targetOperationList)) {
                $res['TargetOperationList'] = [];
                $n1 = 0;
                foreach ($this->targetOperationList as $item1) {
                    $res['TargetOperationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['CriteriaOperation'])) {
            $model->criteriaOperation = $map['CriteriaOperation'];
        }

        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }

        if (isset($map['TargetOperationList'])) {
            if (!empty($map['TargetOperationList'])) {
                $model->targetOperationList = [];
                $n1 = 0;
                foreach ($map['TargetOperationList'] as $item1) {
                    $model->targetOperationList[$n1] = targetOperationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
