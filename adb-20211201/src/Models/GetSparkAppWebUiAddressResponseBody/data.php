<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppWebUiAddressResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var int
     */
    public $expirationTimeInMillis;
    /**
     * @var string
     */
    public $webUiAddress;
    protected $_name = [
        'appId'                  => 'AppId',
        'DBClusterId'            => 'DBClusterId',
        'expirationTimeInMillis' => 'ExpirationTimeInMillis',
        'webUiAddress'           => 'WebUiAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->expirationTimeInMillis) {
            $res['ExpirationTimeInMillis'] = $this->expirationTimeInMillis;
        }

        if (null !== $this->webUiAddress) {
            $res['WebUiAddress'] = $this->webUiAddress;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ExpirationTimeInMillis'])) {
            $model->expirationTimeInMillis = $map['ExpirationTimeInMillis'];
        }

        if (isset($map['WebUiAddress'])) {
            $model->webUiAddress = $map['WebUiAddress'];
        }

        return $model;
    }
}
