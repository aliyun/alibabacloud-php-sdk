<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\UpdateLoginProfileResponseBody;

use AlibabaCloud\Tea\Model;

class loginProfile extends Model
{
    /**
     * @var bool
     */
    public $MFABindRequired;

    /**
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'MFABindRequired'       => 'MFABindRequired',
        'passwordResetRequired' => 'PasswordResetRequired',
        'status'                => 'Status',
        'updateDate'            => 'UpdateDate',
        'userPrincipalName'     => 'UserPrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
        }
        if (null !== $this->passwordResetRequired) {
            $res['PasswordResetRequired'] = $this->passwordResetRequired;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
        }
        if (isset($map['PasswordResetRequired'])) {
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
