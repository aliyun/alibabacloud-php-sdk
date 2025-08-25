<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesResponseBody\mfaDevices;

use AlibabaCloud\Dara\Model;

class adUser extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $displayNameNew;

    /**
     * @var string
     */
    public $endUser;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'displayName' => 'DisplayName',
        'displayNameNew' => 'DisplayNameNew',
        'endUser' => 'EndUser',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->displayNameNew) {
            $res['DisplayNameNew'] = $this->displayNameNew;
        }

        if (null !== $this->endUser) {
            $res['EndUser'] = $this->endUser;
        }

        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['DisplayNameNew'])) {
            $model->displayNameNew = $map['DisplayNameNew'];
        }

        if (isset($map['EndUser'])) {
            $model->endUser = $map['EndUser'];
        }

        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
