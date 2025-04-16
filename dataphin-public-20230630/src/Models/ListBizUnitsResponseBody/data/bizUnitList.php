<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizUnitsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBizUnitsResponseBody\data\bizUnitList\accountList;

class bizUnitList extends Model
{
    /**
     * @var accountList[]
     */
    public $accountList;

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
    public $env;

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
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'env' => 'Env',
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
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
