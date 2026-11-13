<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class RevokeConsumerModelCardGrantsRequest extends Model
{
    /**
     * @var string[]
     */
    public $modelCardIds;

    /**
     * @var string[]
     */
    public $modelGroupIds;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalType;
    protected $_name = [
        'modelCardIds' => 'modelCardIds',
        'modelGroupIds' => 'modelGroupIds',
        'principalId' => 'principalId',
        'principalType' => 'principalType',
    ];

    public function validate()
    {
        if (\is_array($this->modelCardIds)) {
            Model::validateArray($this->modelCardIds);
        }
        if (\is_array($this->modelGroupIds)) {
            Model::validateArray($this->modelGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelCardIds) {
            if (\is_array($this->modelCardIds)) {
                $res['modelCardIds'] = [];
                $n1 = 0;
                foreach ($this->modelCardIds as $item1) {
                    $res['modelCardIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelGroupIds) {
            if (\is_array($this->modelGroupIds)) {
                $res['modelGroupIds'] = [];
                $n1 = 0;
                foreach ($this->modelGroupIds as $item1) {
                    $res['modelGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->principalId) {
            $res['principalId'] = $this->principalId;
        }

        if (null !== $this->principalType) {
            $res['principalType'] = $this->principalType;
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
        if (isset($map['modelCardIds'])) {
            if (!empty($map['modelCardIds'])) {
                $model->modelCardIds = [];
                $n1 = 0;
                foreach ($map['modelCardIds'] as $item1) {
                    $model->modelCardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['modelGroupIds'])) {
            if (!empty($map['modelGroupIds'])) {
                $model->modelGroupIds = [];
                $n1 = 0;
                foreach ($map['modelGroupIds'] as $item1) {
                    $model->modelGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['principalId'])) {
            $model->principalId = $map['principalId'];
        }

        if (isset($map['principalType'])) {
            $model->principalType = $map['principalType'];
        }

        return $model;
    }
}
