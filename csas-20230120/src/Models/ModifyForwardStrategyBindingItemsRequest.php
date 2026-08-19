<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ModifyForwardStrategyBindingItemsRequest extends Model
{
    /**
     * @var string
     */
    public $forwardId;

    /**
     * @var string[]
     */
    public $itemIds;

    /**
     * @var string
     */
    public $matchMode;

    /**
     * @var string
     */
    public $modifyType;
    protected $_name = [
        'forwardId' => 'ForwardId',
        'itemIds' => 'ItemIds',
        'matchMode' => 'MatchMode',
        'modifyType' => 'ModifyType',
    ];

    public function validate()
    {
        if (\is_array($this->itemIds)) {
            Model::validateArray($this->itemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardId) {
            $res['ForwardId'] = $this->forwardId;
        }

        if (null !== $this->itemIds) {
            if (\is_array($this->itemIds)) {
                $res['ItemIds'] = [];
                $n1 = 0;
                foreach ($this->itemIds as $item1) {
                    $res['ItemIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchMode) {
            $res['MatchMode'] = $this->matchMode;
        }

        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
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
        if (isset($map['ForwardId'])) {
            $model->forwardId = $map['ForwardId'];
        }

        if (isset($map['ItemIds'])) {
            if (!empty($map['ItemIds'])) {
                $model->itemIds = [];
                $n1 = 0;
                foreach ($map['ItemIds'] as $item1) {
                    $model->itemIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MatchMode'])) {
            $model->matchMode = $map['MatchMode'];
        }

        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }

        return $model;
    }
}
