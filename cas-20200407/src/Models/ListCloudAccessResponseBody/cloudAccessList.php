<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListCloudAccessResponseBody;

use AlibabaCloud\Tea\Model;

class cloudAccessList extends Model
{
    /**
     * @description The ID of the primary key.
     *
     * @example 888
     *
     * @var int
     */
    public $accessId;

    /**
     * @description The cloud service provider.
     *
     * @example Tencent
     *
     * @var string
     */
    public $cloudName;

    /**
     * @description The AccessKey ID that is used to access cloud resources.
     *
     * @example AAAqdwPBA****
     *
     * @var string
     */
    public $secretId;

    /**
     * @description The service status. The value normal indicates that the service runs as expected.
     *
     * @example normal
     *
     * @var string
     */
    public $serviceStatus;
    protected $_name = [
        'accessId' => 'AccessId',
        'cloudName' => 'CloudName',
        'secretId' => 'SecretId',
        'serviceStatus' => 'ServiceStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudAccessList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        return $model;
    }
}
