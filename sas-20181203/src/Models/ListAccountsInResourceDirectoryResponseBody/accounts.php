<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAccountsInResourceDirectoryResponseBody;

use AlibabaCloud\Dara\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $displayName;
    /**
     * @var string
     */
    public $folderId;
    /**
     * @var string
     */
    public $isMaAccount;
    /**
     * @var string
     */
    public $isMarked;
    /**
     * @var string
     */
    public $isSasDaAccount;
    /**
     * @var string
     */
    public $isSiemControlAccount;
    /**
     * @var string
     */
    public $isSiemDaAccount;
    /**
     * @var string
     */
    public $sasVersion;
    protected $_name = [
        'accountId'            => 'AccountId',
        'displayName'          => 'DisplayName',
        'folderId'             => 'FolderId',
        'isMaAccount'          => 'IsMaAccount',
        'isMarked'             => 'IsMarked',
        'isSasDaAccount'       => 'IsSasDaAccount',
        'isSiemControlAccount' => 'IsSiemControlAccount',
        'isSiemDaAccount'      => 'IsSiemDaAccount',
        'sasVersion'           => 'SasVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->isMaAccount) {
            $res['IsMaAccount'] = $this->isMaAccount;
        }

        if (null !== $this->isMarked) {
            $res['IsMarked'] = $this->isMarked;
        }

        if (null !== $this->isSasDaAccount) {
            $res['IsSasDaAccount'] = $this->isSasDaAccount;
        }

        if (null !== $this->isSiemControlAccount) {
            $res['IsSiemControlAccount'] = $this->isSiemControlAccount;
        }

        if (null !== $this->isSiemDaAccount) {
            $res['IsSiemDaAccount'] = $this->isSiemDaAccount;
        }

        if (null !== $this->sasVersion) {
            $res['SasVersion'] = $this->sasVersion;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['IsMaAccount'])) {
            $model->isMaAccount = $map['IsMaAccount'];
        }

        if (isset($map['IsMarked'])) {
            $model->isMarked = $map['IsMarked'];
        }

        if (isset($map['IsSasDaAccount'])) {
            $model->isSasDaAccount = $map['IsSasDaAccount'];
        }

        if (isset($map['IsSiemControlAccount'])) {
            $model->isSiemControlAccount = $map['IsSiemControlAccount'];
        }

        if (isset($map['IsSiemDaAccount'])) {
            $model->isSiemDaAccount = $map['IsSiemDaAccount'];
        }

        if (isset($map['SasVersion'])) {
            $model->sasVersion = $map['SasVersion'];
        }

        return $model;
    }
}
