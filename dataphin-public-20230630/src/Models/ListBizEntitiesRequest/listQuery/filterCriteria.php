<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizEntitiesRequest\listQuery;

use AlibabaCloud\Tea\Model;

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
        'bizUnitIdList'      => 'BizUnitIdList',
        'bizUnitNameList'    => 'BizUnitNameList',
        'dataDomainIdList'   => 'DataDomainIdList',
        'dataDomainNameList' => 'DataDomainNameList',
        'hasTableRef'        => 'HasTableRef',
        'ownerUserIdList'    => 'OwnerUserIdList',
        'statusList'         => 'StatusList',
        'subTypeList'        => 'SubTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitIdList) {
            $res['BizUnitIdList'] = $this->bizUnitIdList;
        }
        if (null !== $this->bizUnitNameList) {
            $res['BizUnitNameList'] = $this->bizUnitNameList;
        }
        if (null !== $this->dataDomainIdList) {
            $res['DataDomainIdList'] = $this->dataDomainIdList;
        }
        if (null !== $this->dataDomainNameList) {
            $res['DataDomainNameList'] = $this->dataDomainNameList;
        }
        if (null !== $this->hasTableRef) {
            $res['HasTableRef'] = $this->hasTableRef;
        }
        if (null !== $this->ownerUserIdList) {
            $res['OwnerUserIdList'] = $this->ownerUserIdList;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->subTypeList) {
            $res['SubTypeList'] = $this->subTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterCriteria
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizUnitIdList'])) {
            if (!empty($map['BizUnitIdList'])) {
                $model->bizUnitIdList = $map['BizUnitIdList'];
            }
        }
        if (isset($map['BizUnitNameList'])) {
            if (!empty($map['BizUnitNameList'])) {
                $model->bizUnitNameList = $map['BizUnitNameList'];
            }
        }
        if (isset($map['DataDomainIdList'])) {
            if (!empty($map['DataDomainIdList'])) {
                $model->dataDomainIdList = $map['DataDomainIdList'];
            }
        }
        if (isset($map['DataDomainNameList'])) {
            if (!empty($map['DataDomainNameList'])) {
                $model->dataDomainNameList = $map['DataDomainNameList'];
            }
        }
        if (isset($map['HasTableRef'])) {
            $model->hasTableRef = $map['HasTableRef'];
        }
        if (isset($map['OwnerUserIdList'])) {
            if (!empty($map['OwnerUserIdList'])) {
                $model->ownerUserIdList = $map['OwnerUserIdList'];
            }
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['SubTypeList'])) {
            if (!empty($map['SubTypeList'])) {
                $model->subTypeList = $map['SubTypeList'];
            }
        }

        return $model;
    }
}
