<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo\accountList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo\businessLeaderList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo\dataLeaderList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo\envList;

class bizUnitInfo extends Model
{
    /**
     * @var accountList[]
     */
    public $accountList;

    /**
     * @var int
     */
    public $bizObjectCount;

    /**
     * @var int
     */
    public $bizProcessCount;

    /**
     * @var businessLeaderList[]
     */
    public $businessLeaderList;

    /**
     * @var int
     */
    public $dataDomainCount;

    /**
     * @var dataLeaderList[]
     */
    public $dataLeaderList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var envList[]
     */
    public $envList;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastModifier;

    /**
     * @var string
     */
    public $lastModifierName;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerUserId;
    protected $_name = [
        'accountList' => 'AccountList',
        'bizObjectCount' => 'BizObjectCount',
        'bizProcessCount' => 'BizProcessCount',
        'businessLeaderList' => 'BusinessLeaderList',
        'dataDomainCount' => 'DataDomainCount',
        'dataLeaderList' => 'DataLeaderList',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'envList' => 'EnvList',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'icon' => 'Icon',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'lastModifierName' => 'LastModifierName',
        'mode' => 'Mode',
        'name' => 'Name',
        'ownerName' => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
    ];

    public function validate()
    {
        if (\is_array($this->accountList)) {
            Model::validateArray($this->accountList);
        }
        if (\is_array($this->businessLeaderList)) {
            Model::validateArray($this->businessLeaderList);
        }
        if (\is_array($this->dataLeaderList)) {
            Model::validateArray($this->dataLeaderList);
        }
        if (\is_array($this->envList)) {
            Model::validateArray($this->envList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountList) {
            if (\is_array($this->accountList)) {
                $res['AccountList'] = [];
                $n1 = 0;
                foreach ($this->accountList as $item1) {
                    $res['AccountList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->businessLeaderList)) {
                $res['BusinessLeaderList'] = [];
                $n1 = 0;
                foreach ($this->businessLeaderList as $item1) {
                    $res['BusinessLeaderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dataDomainCount) {
            $res['DataDomainCount'] = $this->dataDomainCount;
        }

        if (null !== $this->dataLeaderList) {
            if (\is_array($this->dataLeaderList)) {
                $res['DataLeaderList'] = [];
                $n1 = 0;
                foreach ($this->dataLeaderList as $item1) {
                    $res['DataLeaderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->envList)) {
                $res['EnvList'] = [];
                $n1 = 0;
                foreach ($this->envList as $item1) {
                    $res['EnvList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountList'])) {
            if (!empty($map['AccountList'])) {
                $model->accountList = [];
                $n1 = 0;
                foreach ($map['AccountList'] as $item1) {
                    $model->accountList[$n1++] = accountList::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['BusinessLeaderList'] as $item1) {
                    $model->businessLeaderList[$n1++] = businessLeaderList::fromMap($item1);
                }
            }
        }

        if (isset($map['DataDomainCount'])) {
            $model->dataDomainCount = $map['DataDomainCount'];
        }

        if (isset($map['DataLeaderList'])) {
            if (!empty($map['DataLeaderList'])) {
                $model->dataLeaderList = [];
                $n1 = 0;
                foreach ($map['DataLeaderList'] as $item1) {
                    $model->dataLeaderList[$n1++] = dataLeaderList::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['EnvList'] as $item1) {
                    $model->envList[$n1++] = envList::fromMap($item1);
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
