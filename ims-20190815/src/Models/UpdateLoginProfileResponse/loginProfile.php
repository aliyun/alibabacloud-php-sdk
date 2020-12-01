<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileResponse;

use AlibabaCloud\Tea\Model;

class loginProfile extends Model
{
    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @var bool
     */
    public $MFABindRequired;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'userPrincipalName'     => 'UserPrincipalName',
        'passwordResetRequired' => 'PasswordResetRequired',
        'MFABindRequired'       => 'MFABindRequired',
        'updateDate'            => 'UpdateDate',
        'status'                => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
        Model::validateRequired('passwordResetRequired', $this->passwordResetRequired, true);
        Model::validateRequired('MFABindRequired', $this->MFABindRequired, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->passwordResetRequired) {
            $res['PasswordResetRequired'] = $this->passwordResetRequired;
        }
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['PasswordResetRequired'])) {
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
