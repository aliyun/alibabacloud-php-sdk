<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DataValue extends Model
{
    /**
     * @description The ID of the user to which the application belongs.
     *
     * @example 12345
     *
     * @var string
     */
    public $userId;

    /**
     * @description The region where the application resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The microservice namespace where the application resides.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The application name.
     *
     * @example example-app-name
     *
     * @var string
     */
    public $appName;

    /**
     * @description The application ID.
     *
     * @example 123456abcde@12345abcde
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'userId'    => 'UserId',
        'regionId'  => 'RegionId',
        'namespace' => 'Namespace',
        'appName'   => 'AppName',
        'appId'     => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
