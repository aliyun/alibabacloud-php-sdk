<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesRequest\listQuery;

use AlibabaCloud\Dara\Model;

class filterCriteria extends Model
{
    /**
     * @var int[]
     */
    public $bizUnitIdList;

    /**
     * @var string[]
     */
    public $bizUnitNameList;

    /**
     * @var int[]
     */
    public $dataDomainIdList;

    /**
     * @var string[]
     */
    public $dataDomainNameList;

    /**
     * @var bool
     */
    public $hasTableRef;

    /**
     * @var string[]
     */
    public $ownerUserIdList;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $subTypeList;
    protected $_name = [
        'bizUnitIdList' => 'BizUnitIdList',
        'bizUnitNameList' => 'BizUnitNameList',
        'dataDomainIdList' => 'DataDomainIdList',
        'dataDomainNameList' => 'DataDomainNameList',
        'hasTableRef' => 'HasTableRef',
        'ownerUserIdList' => 'OwnerUserIdList',
        'statusList' => 'StatusList',
        'subTypeList' => 'SubTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->bizUnitIdList)) {
            Model::validateArray($this->bizUnitIdList);
        }
        if (\is_array($this->bizUnitNameList)) {
            Model::validateArray($this->bizUnitNameList);
        }
        if (\is_array($this->dataDomainIdList)) {
            Model::validateArray($this->dataDomainIdList);
        }
        if (\is_array($this->dataDomainNameList)) {
            Model::validateArray($this->dataDomainNameList);
        }
        if (\is_array($this->ownerUserIdList)) {
            Model::validateArray($this->ownerUserIdList);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        if (\is_array($this->subTypeList)) {
            Model::validateArray($this->subTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitIdList) {
            if (\is_array($this->bizUnitIdList)) {
                $res['BizUnitIdList'] = [];
                $n1 = 0;
                foreach ($this->bizUnitIdList as $item1) {
                    $res['BizUnitIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->bizUnitNameList) {
            if (\is_array($this->bizUnitNameList)) {
                $res['BizUnitNameList'] = [];
                $n1 = 0;
                foreach ($this->bizUnitNameList as $item1) {
                    $res['BizUnitNameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dataDomainIdList) {
            if (\is_array($this->dataDomainIdList)) {
                $res['DataDomainIdList'] = [];
                $n1 = 0;
                foreach ($this->dataDomainIdList as $item1) {
                    $res['DataDomainIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->dataDomainNameList) {
            if (\is_array($this->dataDomainNameList)) {
                $res['DataDomainNameList'] = [];
                $n1 = 0;
                foreach ($this->dataDomainNameList as $item1) {
                    $res['DataDomainNameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->hasTableRef) {
            $res['HasTableRef'] = $this->hasTableRef;
        }

        if (null !== $this->ownerUserIdList) {
            if (\is_array($this->ownerUserIdList)) {
                $res['OwnerUserIdList'] = [];
                $n1 = 0;
                foreach ($this->ownerUserIdList as $item1) {
                    $res['OwnerUserIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->subTypeList) {
            if (\is_array($this->subTypeList)) {
                $res['SubTypeList'] = [];
                $n1 = 0;
                foreach ($this->subTypeList as $item1) {
                    $res['SubTypeList'][$n1++] = $item1;
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
        if (isset($map['BizUnitIdList'])) {
            if (!empty($map['BizUnitIdList'])) {
                $model->bizUnitIdList = [];
                $n1 = 0;
                foreach ($map['BizUnitIdList'] as $item1) {
                    $model->bizUnitIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BizUnitNameList'])) {
            if (!empty($map['BizUnitNameList'])) {
                $model->bizUnitNameList = [];
                $n1 = 0;
                foreach ($map['BizUnitNameList'] as $item1) {
                    $model->bizUnitNameList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DataDomainIdList'])) {
            if (!empty($map['DataDomainIdList'])) {
                $model->dataDomainIdList = [];
                $n1 = 0;
                foreach ($map['DataDomainIdList'] as $item1) {
                    $model->dataDomainIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DataDomainNameList'])) {
            if (!empty($map['DataDomainNameList'])) {
                $model->dataDomainNameList = [];
                $n1 = 0;
                foreach ($map['DataDomainNameList'] as $item1) {
                    $model->dataDomainNameList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['HasTableRef'])) {
            $model->hasTableRef = $map['HasTableRef'];
        }

        if (isset($map['OwnerUserIdList'])) {
            if (!empty($map['OwnerUserIdList'])) {
                $model->ownerUserIdList = [];
                $n1 = 0;
                foreach ($map['OwnerUserIdList'] as $item1) {
                    $model->ownerUserIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SubTypeList'])) {
            if (!empty($map['SubTypeList'])) {
                $model->subTypeList = [];
                $n1 = 0;
                foreach ($map['SubTypeList'] as $item1) {
                    $model->subTypeList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
