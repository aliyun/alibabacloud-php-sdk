<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SaveCostCenterShareRuleRequest\createShareRuleList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SaveCostCenterShareRuleRequest\modifyShareRuleList;

class SaveCostCenterShareRuleRequest extends Model
{
    /**
     * @var createShareRuleList[]
     */
    public $createShareRuleList;

    /**
     * @var modifyShareRuleList[]
     */
    public $modifyShareRuleList;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var int[]
     */
    public $removeShareRuleList;
    protected $_name = [
        'createShareRuleList' => 'CreateShareRuleList',
        'modifyShareRuleList' => 'ModifyShareRuleList',
        'nbid' => 'Nbid',
        'ownerAccountId' => 'OwnerAccountId',
        'removeShareRuleList' => 'RemoveShareRuleList',
    ];

    public function validate()
    {
        if (\is_array($this->createShareRuleList)) {
            Model::validateArray($this->createShareRuleList);
        }
        if (\is_array($this->modifyShareRuleList)) {
            Model::validateArray($this->modifyShareRuleList);
        }
        if (\is_array($this->removeShareRuleList)) {
            Model::validateArray($this->removeShareRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createShareRuleList) {
            if (\is_array($this->createShareRuleList)) {
                $res['CreateShareRuleList'] = [];
                $n1 = 0;
                foreach ($this->createShareRuleList as $item1) {
                    $res['CreateShareRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifyShareRuleList) {
            if (\is_array($this->modifyShareRuleList)) {
                $res['ModifyShareRuleList'] = [];
                $n1 = 0;
                foreach ($this->modifyShareRuleList as $item1) {
                    $res['ModifyShareRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->removeShareRuleList) {
            if (\is_array($this->removeShareRuleList)) {
                $res['RemoveShareRuleList'] = [];
                $n1 = 0;
                foreach ($this->removeShareRuleList as $item1) {
                    $res['RemoveShareRuleList'][$n1] = $item1;
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
        if (isset($map['CreateShareRuleList'])) {
            if (!empty($map['CreateShareRuleList'])) {
                $model->createShareRuleList = [];
                $n1 = 0;
                foreach ($map['CreateShareRuleList'] as $item1) {
                    $model->createShareRuleList[$n1] = createShareRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifyShareRuleList'])) {
            if (!empty($map['ModifyShareRuleList'])) {
                $model->modifyShareRuleList = [];
                $n1 = 0;
                foreach ($map['ModifyShareRuleList'] as $item1) {
                    $model->modifyShareRuleList[$n1] = modifyShareRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['RemoveShareRuleList'])) {
            if (!empty($map['RemoveShareRuleList'])) {
                $model->removeShareRuleList = [];
                $n1 = 0;
                foreach ($map['RemoveShareRuleList'] as $item1) {
                    $model->removeShareRuleList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
