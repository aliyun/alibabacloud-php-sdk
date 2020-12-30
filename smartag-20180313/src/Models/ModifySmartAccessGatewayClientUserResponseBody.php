<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ModifySmartAccessGatewayClientUserResponseBody extends Model
{
    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userMail;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $clientIp;
    protected $_name = [
        'userName'  => 'UserName',
        'requestId' => 'RequestId',
        'userMail'  => 'UserMail',
        'bandwidth' => 'Bandwidth',
        'clientIp'  => 'ClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userMail) {
            $res['UserMail'] = $this->userMail;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySmartAccessGatewayClientUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserMail'])) {
            $model->userMail = $map['UserMail'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        return $model;
    }
}
