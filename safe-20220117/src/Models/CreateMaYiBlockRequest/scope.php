<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\CreateMaYiBlockRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateMaYiBlockRequest\scope\groupBlockScopeParams;

class scope extends Model
{
    /**
     * @var groupBlockScopeParams[]
     */
    public $groupBlockScopeParams;
    protected $_name = [
        'groupBlockScopeParams' => 'GroupBlockScopeParams',
    ];

    public function validate()
    {
        if (\is_array($this->groupBlockScopeParams)) {
            Model::validateArray($this->groupBlockScopeParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupBlockScopeParams) {
            if (\is_array($this->groupBlockScopeParams)) {
                $res['GroupBlockScopeParams'] = [];
                $n1 = 0;
                foreach ($this->groupBlockScopeParams as $item1) {
                    $res['GroupBlockScopeParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GroupBlockScopeParams'])) {
            if (!empty($map['GroupBlockScopeParams'])) {
                $model->groupBlockScopeParams = [];
                $n1 = 0;
                foreach ($map['GroupBlockScopeParams'] as $item1) {
                    $model->groupBlockScopeParams[$n1] = groupBlockScopeParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
