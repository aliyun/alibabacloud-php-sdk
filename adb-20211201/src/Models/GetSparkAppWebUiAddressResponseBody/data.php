<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\GetSparkAppWebUiAddressResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Spark application ID.
     *
     * @example s202205201533hz1209892000****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The database ID.
     *
     * @example amv-clusterxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The expiration time. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1655801973000
     *
     * @var int
     */
    public $expirationTimeInMillis;

    /**
     * @description The URL of the web UI for the Spark application.
     *
     * @example https://adbsparkui-cn-hangzhou.aliyuncs.com/?token=****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
