<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class BindMFADeviceRequest extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $authenticationCode1;

    /**
     * @var string
     */
    public $authenticationCode2;

    /**
     * @var string
     */
    public $akProxySuffix;
    protected $_name = [
        'serialNumber'        => 'SerialNumber',
        'userPrincipalName'   => 'UserPrincipalName',
        'authenticationCode1' => 'AuthenticationCode1',
        'authenticationCode2' => 'AuthenticationCode2',
        'akProxySuffix'       => 'AkProxySuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->authenticationCode1) {
            $res['AuthenticationCode1'] = $this->authenticationCode1;
        }
        if (null !== $this->authenticationCode2) {
            $res['AuthenticationCode2'] = $this->authenticationCode2;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindMFADeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['AuthenticationCode1'])) {
            $model->authenticationCode1 = $map['AuthenticationCode1'];
        }
        if (isset($map['AuthenticationCode2'])) {
            $model->authenticationCode2 = $map['AuthenticationCode2'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }

        return $model;
    }
}
