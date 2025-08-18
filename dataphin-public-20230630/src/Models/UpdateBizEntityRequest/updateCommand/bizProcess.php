<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizEntityRequest\updateCommand;

use AlibabaCloud\Dara\Model;

class bizProcess extends Model
{
    /**
     * @var int[]
     */
    public $bizEventEntityIdList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var int[]
     */
    public $preBizProcessIdList;

    /**
     * @var int[]
     */
    public $refBizEntityIdList;
    protected $_name = [
        'bizEventEntityIdList' => 'BizEventEntityIdList',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'ownerUserId' => 'OwnerUserId',
        'preBizProcessIdList' => 'PreBizProcessIdList',
        'refBizEntityIdList' => 'RefBizEntityIdList',
    ];

    public function validate()
    {
        if (\is_array($this->bizEventEntityIdList)) {
            Model::validateArray($this->bizEventEntityIdList);
        }
        if (\is_array($this->preBizProcessIdList)) {
            Model::validateArray($this->preBizProcessIdList);
        }
        if (\is_array($this->refBizEntityIdList)) {
            Model::validateArray($this->refBizEntityIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizEventEntityIdList) {
            if (\is_array($this->bizEventEntityIdList)) {
                $res['BizEventEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->bizEventEntityIdList as $item1) {
                    $res['BizEventEntityIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->preBizProcessIdList) {
            if (\is_array($this->preBizProcessIdList)) {
                $res['PreBizProcessIdList'] = [];
                $n1 = 0;
                foreach ($this->preBizProcessIdList as $item1) {
                    $res['PreBizProcessIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refBizEntityIdList) {
            if (\is_array($this->refBizEntityIdList)) {
                $res['RefBizEntityIdList'] = [];
                $n1 = 0;
                foreach ($this->refBizEntityIdList as $item1) {
                    $res['RefBizEntityIdList'][$n1] = $item1;
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
        if (isset($map['BizEventEntityIdList'])) {
            if (!empty($map['BizEventEntityIdList'])) {
                $model->bizEventEntityIdList = [];
                $n1 = 0;
                foreach ($map['BizEventEntityIdList'] as $item1) {
                    $model->bizEventEntityIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['PreBizProcessIdList'])) {
            if (!empty($map['PreBizProcessIdList'])) {
                $model->preBizProcessIdList = [];
                $n1 = 0;
                foreach ($map['PreBizProcessIdList'] as $item1) {
                    $model->preBizProcessIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RefBizEntityIdList'])) {
            if (!empty($map['RefBizEntityIdList'])) {
                $model->refBizEntityIdList = [];
                $n1 = 0;
                foreach ($map['RefBizEntityIdList'] as $item1) {
                    $model->refBizEntityIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
