<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseRegisterAccountResponseBody;

use AlibabaCloud\Dara\Model;

class accountInfo extends Model
{
    /**
     * @var string
     */
    public $enterpriseLicenseNo;

    /**
     * @var string
     */
    public $enterpriseName;

    /**
     * @var string
     */
    public $loginId;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'enterpriseLicenseNo' => 'EnterpriseLicenseNo',
        'enterpriseName' => 'EnterpriseName',
        'loginId' => 'LoginId',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enterpriseLicenseNo) {
            $res['EnterpriseLicenseNo'] = $this->enterpriseLicenseNo;
        }

        if (null !== $this->enterpriseName) {
            $res['EnterpriseName'] = $this->enterpriseName;
        }

        if (null !== $this->loginId) {
            $res['LoginId'] = $this->loginId;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['EnterpriseLicenseNo'])) {
            $model->enterpriseLicenseNo = $map['EnterpriseLicenseNo'];
        }

        if (isset($map['EnterpriseName'])) {
            $model->enterpriseName = $map['EnterpriseName'];
        }

        if (isset($map['LoginId'])) {
            $model->loginId = $map['LoginId'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
