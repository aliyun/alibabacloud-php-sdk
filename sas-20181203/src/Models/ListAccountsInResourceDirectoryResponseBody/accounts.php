<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAccountsInResourceDirectoryResponseBody;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 180803538814****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The name of the member.
     *
     * @example abc**
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the folder in the resource directory.
     *
     * @example fd-cE2SQP****
     *
     * @var string
     */
    public $folderId;

    /**
     * @description Indicates whether the member is an administrator account of the resource directory. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example no
     *
     * @var string
     */
    public $isMaAccount;

    /**
     * @description Indicates whether the member is marked as followed.
     *
     * @example no
     *
     * @var string
     */
    public $isMarked;

    /**
     * @description Indicates whether the member is a delegated administrator account of Security Center. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example no
     *
     * @var string
     */
    public $isSasDaAccount;

    /**
     * @description Indicates whether the member is an account of the threat analysis and response feature. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example no
     *
     * @var string
     */
    public $isSiemControlAccount;

    /**
     * @description Indicates whether the member is a delegated administrator account of the threat analysis and response feature. Valid values:
     *
     *   **yes**
     *   **no**
     *
     * @example no
     *
     * @var string
     */
    public $isSiemDaAccount;

    /**
     * @description The edition of Security Center that you use. Valid value:
     *
     *   **0** or **1**: Basic
     *   **2** or **3**: Enterprise
     *   **5**: Advanced
     *   **6**: Anti-virus
     *   **7**: Ultimate
     *
     * @example 0
     *
     * @var string
     */
    public $sasVersion;
    protected $_name = [
        'accountId' => 'AccountId',
        'displayName' => 'DisplayName',
        'folderId' => 'FolderId',
        'isMaAccount' => 'IsMaAccount',
        'isMarked' => 'IsMarked',
        'isSasDaAccount' => 'IsSasDaAccount',
        'isSiemControlAccount' => 'IsSiemControlAccount',
        'isSiemDaAccount' => 'IsSiemDaAccount',
        'sasVersion' => 'SasVersion',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return accounts
     */
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
