<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SaveCostCenterShareRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $createShareRuleListShrink;

    /**
     * @var string
     */
    public $modifyShareRuleListShrink;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var string
     */
    public $removeShareRuleListShrink;
    protected $_name = [
        'createShareRuleListShrink' => 'CreateShareRuleList',
        'modifyShareRuleListShrink' => 'ModifyShareRuleList',
        'nbid' => 'Nbid',
        'ownerAccountId' => 'OwnerAccountId',
        'removeShareRuleListShrink' => 'RemoveShareRuleList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createShareRuleListShrink) {
            $res['CreateShareRuleList'] = $this->createShareRuleListShrink;
        }

        if (null !== $this->modifyShareRuleListShrink) {
            $res['ModifyShareRuleList'] = $this->modifyShareRuleListShrink;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->removeShareRuleListShrink) {
            $res['RemoveShareRuleList'] = $this->removeShareRuleListShrink;
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
            $model->createShareRuleListShrink = $map['CreateShareRuleList'];
        }

        if (isset($map['ModifyShareRuleList'])) {
            $model->modifyShareRuleListShrink = $map['ModifyShareRuleList'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['RemoveShareRuleList'])) {
            $model->removeShareRuleListShrink = $map['RemoveShareRuleList'];
        }

        return $model;
    }
}
