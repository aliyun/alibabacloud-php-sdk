<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo\accountList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo\businessLeaderList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo\dataLeaderList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo\envList;
use AlibabaCloud\Tea\Model;

class bizUnitInfo extends Model
{
    /**
     * @var accountList[]
     */
    public $accountList;

    /**
     * @example 1
     *
     * @var int
     */
    public $bizObjectCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $bizProcessCount;

    /**
     * @var businessLeaderList[]
     */
    public $businessLeaderList;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataDomainCount;

    /**
     * @var dataLeaderList[]
     */
    public $dataLeaderList;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 测试
     *
     * @var string
     */
    public $displayName;

    /**
     * @var envList[]
     */
    public $envList;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example icon-e-commerce
     *
     * @var string
     */
    public $icon;

    /**
     * @example 101001201
     *
     * @var int
     */
    public $id;

    /**
     * @example 30010010
     *
     * @var string
     */
    public $lastModifier;

    /**
     * @example 张三
     *
     * @var string
     */
    public $lastModifierName;

    /**
     * @example DEV_PROD
     *
     * @var string
     */
    public $mode;

    /**
     * @example test01
     *
     * @var string
     */
    public $name;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 30010010
     *
     * @var string
     */
    public $ownerUserId;
    protected $_name = [
        'accountList'        => 'AccountList',
        'bizObjectCount'     => 'BizObjectCount',
        'bizProcessCount'    => 'BizProcessCount',
        'businessLeaderList' => 'BusinessLeaderList',
        'dataDomainCount'    => 'DataDomainCount',
        'dataLeaderList'     => 'DataLeaderList',
        'description'        => 'Description',
        'displayName'        => 'DisplayName',
        'envList'            => 'EnvList',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'icon'               => 'Icon',
        'id'                 => 'Id',
        'lastModifier'       => 'LastModifier',
        'lastModifierName'   => 'LastModifierName',
        'mode'               => 'Mode',
        'name'               => 'Name',
        'ownerName'          => 'OwnerName',
        'ownerUserId'        => 'OwnerUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountList) {
            $res['AccountList'] = [];
            if (null !== $this->accountList && \is_array($this->accountList)) {
                $n = 0;
                foreach ($this->accountList as $item) {
                    $res['AccountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizObjectCount) {
            $res['BizObjectCount'] = $this->bizObjectCount;
        }
        if (null !== $this->bizProcessCount) {
            $res['BizProcessCount'] = $this->bizProcessCount;
        }
        if (null !== $this->businessLeaderList) {
            $res['BusinessLeaderList'] = [];
            if (null !== $this->businessLeaderList && \is_array($this->businessLeaderList)) {
                $n = 0;
                foreach ($this->businessLeaderList as $item) {
                    $res['BusinessLeaderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataDomainCount) {
            $res['DataDomainCount'] = $this->dataDomainCount;
        }
        if (null !== $this->dataLeaderList) {
            $res['DataLeaderList'] = [];
            if (null !== $this->dataLeaderList && \is_array($this->dataLeaderList)) {
                $n = 0;
                foreach ($this->dataLeaderList as $item) {
                    $res['DataLeaderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->envList) {
            $res['EnvList'] = [];
            if (null !== $this->envList && \is_array($this->envList)) {
                $n = 0;
                foreach ($this->envList as $item) {
                    $res['EnvList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastModifier) {
            $res['LastModifier'] = $this->lastModifier;
        }
        if (null !== $this->lastModifierName) {
            $res['LastModifierName'] = $this->lastModifierName;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizUnitInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountList'])) {
            if (!empty($map['AccountList'])) {
                $model->accountList = [];
                $n                  = 0;
                foreach ($map['AccountList'] as $item) {
                    $model->accountList[$n++] = null !== $item ? accountList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizObjectCount'])) {
            $model->bizObjectCount = $map['BizObjectCount'];
        }
        if (isset($map['BizProcessCount'])) {
            $model->bizProcessCount = $map['BizProcessCount'];
        }
        if (isset($map['BusinessLeaderList'])) {
            if (!empty($map['BusinessLeaderList'])) {
                $model->businessLeaderList = [];
                $n                         = 0;
                foreach ($map['BusinessLeaderList'] as $item) {
                    $model->businessLeaderList[$n++] = null !== $item ? businessLeaderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataDomainCount'])) {
            $model->dataDomainCount = $map['DataDomainCount'];
        }
        if (isset($map['DataLeaderList'])) {
            if (!empty($map['DataLeaderList'])) {
                $model->dataLeaderList = [];
                $n                     = 0;
                foreach ($map['DataLeaderList'] as $item) {
                    $model->dataLeaderList[$n++] = null !== $item ? dataLeaderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EnvList'])) {
            if (!empty($map['EnvList'])) {
                $model->envList = [];
                $n              = 0;
                foreach ($map['EnvList'] as $item) {
                    $model->envList[$n++] = null !== $item ? envList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastModifier'])) {
            $model->lastModifier = $map['LastModifier'];
        }
        if (isset($map['LastModifierName'])) {
            $model->lastModifierName = $map['LastModifierName'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        return $model;
    }
}
