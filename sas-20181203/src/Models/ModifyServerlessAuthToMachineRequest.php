<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyServerlessAuthToMachineRequest extends Model
{
    /**
     * @var string
     */
    public $appCriteria;
    /**
     * @var string
     */
    public $authItem;
    /**
     * @var int
     */
    public $autoBind;
    /**
     * @var bool
     */
    public $bindAll;
    /**
     * @var string[]
     */
    public $bindAppList;
    /**
     * @var string
     */
    public $bindAssetType;
    /**
     * @var string[]
     */
    public $bindUuidList;
    /**
     * @var string
     */
    public $criteria;
    /**
     * @var string
     */
    public $logicalExp;
    /**
     * @var string
     */
    public $ntmVersion;
    /**
     * @var int
     */
    public $preBind;
    /**
     * @var int
     */
    public $preBindOrderId;
    /**
     * @var int
     */
    public $resourceDirectoryUid;
    /**
     * @var string[]
     */
    public $unBindAppList;
    /**
     * @var string[]
     */
    public $unBindUuidList;
    protected $_name = [
        'appCriteria'          => 'AppCriteria',
        'authItem'             => 'AuthItem',
        'autoBind'             => 'AutoBind',
        'bindAll'              => 'BindAll',
        'bindAppList'          => 'BindAppList',
        'bindAssetType'        => 'BindAssetType',
        'bindUuidList'         => 'BindUuidList',
        'criteria'             => 'Criteria',
        'logicalExp'           => 'LogicalExp',
        'ntmVersion'           => 'NtmVersion',
        'preBind'              => 'PreBind',
        'preBindOrderId'       => 'PreBindOrderId',
        'resourceDirectoryUid' => 'ResourceDirectoryUid',
        'unBindAppList'        => 'UnBindAppList',
        'unBindUuidList'       => 'UnBindUuidList',
    ];

    public function validate()
    {
        if (\is_array($this->bindAppList)) {
            Model::validateArray($this->bindAppList);
        }
        if (\is_array($this->bindUuidList)) {
            Model::validateArray($this->bindUuidList);
        }
        if (\is_array($this->unBindAppList)) {
            Model::validateArray($this->unBindAppList);
        }
        if (\is_array($this->unBindUuidList)) {
            Model::validateArray($this->unBindUuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCriteria) {
            $res['AppCriteria'] = $this->appCriteria;
        }

        if (null !== $this->authItem) {
            $res['AuthItem'] = $this->authItem;
        }

        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }

        if (null !== $this->bindAll) {
            $res['BindAll'] = $this->bindAll;
        }

        if (null !== $this->bindAppList) {
            if (\is_array($this->bindAppList)) {
                $res['BindAppList'] = [];
                $n1                 = 0;
                foreach ($this->bindAppList as $item1) {
                    $res['BindAppList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->bindAssetType) {
            $res['BindAssetType'] = $this->bindAssetType;
        }

        if (null !== $this->bindUuidList) {
            if (\is_array($this->bindUuidList)) {
                $res['BindUuidList'] = [];
                $n1                  = 0;
                foreach ($this->bindUuidList as $item1) {
                    $res['BindUuidList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }

        if (null !== $this->ntmVersion) {
            $res['NtmVersion'] = $this->ntmVersion;
        }

        if (null !== $this->preBind) {
            $res['PreBind'] = $this->preBind;
        }

        if (null !== $this->preBindOrderId) {
            $res['PreBindOrderId'] = $this->preBindOrderId;
        }

        if (null !== $this->resourceDirectoryUid) {
            $res['ResourceDirectoryUid'] = $this->resourceDirectoryUid;
        }

        if (null !== $this->unBindAppList) {
            if (\is_array($this->unBindAppList)) {
                $res['UnBindAppList'] = [];
                $n1                   = 0;
                foreach ($this->unBindAppList as $item1) {
                    $res['UnBindAppList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->unBindUuidList) {
            if (\is_array($this->unBindUuidList)) {
                $res['UnBindUuidList'] = [];
                $n1                    = 0;
                foreach ($this->unBindUuidList as $item1) {
                    $res['UnBindUuidList'][$n1++] = $item1;
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
        if (isset($map['AppCriteria'])) {
            $model->appCriteria = $map['AppCriteria'];
        }

        if (isset($map['AuthItem'])) {
            $model->authItem = $map['AuthItem'];
        }

        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }

        if (isset($map['BindAll'])) {
            $model->bindAll = $map['BindAll'];
        }

        if (isset($map['BindAppList'])) {
            if (!empty($map['BindAppList'])) {
                $model->bindAppList = [];
                $n1                 = 0;
                foreach ($map['BindAppList'] as $item1) {
                    $model->bindAppList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BindAssetType'])) {
            $model->bindAssetType = $map['BindAssetType'];
        }

        if (isset($map['BindUuidList'])) {
            if (!empty($map['BindUuidList'])) {
                $model->bindUuidList = [];
                $n1                  = 0;
                foreach ($map['BindUuidList'] as $item1) {
                    $model->bindUuidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }

        if (isset($map['NtmVersion'])) {
            $model->ntmVersion = $map['NtmVersion'];
        }

        if (isset($map['PreBind'])) {
            $model->preBind = $map['PreBind'];
        }

        if (isset($map['PreBindOrderId'])) {
            $model->preBindOrderId = $map['PreBindOrderId'];
        }

        if (isset($map['ResourceDirectoryUid'])) {
            $model->resourceDirectoryUid = $map['ResourceDirectoryUid'];
        }

        if (isset($map['UnBindAppList'])) {
            if (!empty($map['UnBindAppList'])) {
                $model->unBindAppList = [];
                $n1                   = 0;
                foreach ($map['UnBindAppList'] as $item1) {
                    $model->unBindAppList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UnBindUuidList'])) {
            if (!empty($map['UnBindUuidList'])) {
                $model->unBindUuidList = [];
                $n1                    = 0;
                foreach ($map['UnBindUuidList'] as $item1) {
                    $model->unBindUuidList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
