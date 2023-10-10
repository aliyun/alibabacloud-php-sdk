<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class applicationInfo extends Model
{
    /**
     * @description The ID of the application. The ID is the unique identifier of the application in EDAS.
     *
     * @example 6c733bcd-6efb-47a1-8226-cf722c******
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example hello-edas-test-1
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the change process.
     *
     * @example d0cf569e-dce3-4efb-****-08b70021****
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @description Indicates whether the application is a Docker application. Valid values:
     *
     *   **true**: The application is a Docker application.
     *   **false**: The application is not a Docker application.
     *
     * @example false
     *
     * @var bool
     */
    public $dockerize;

    /**
     * @description The owner of the application. The owner is the user who created the application.
     *
     * @example 249763358688********
     *
     * @var string
     */
    public $owner;

    /**
     * @description The port used by the created application. Default value: 8080. You can call the UpdateContainerConfiguration operation to change the port. For more information, see [UpdateContainerConfiguration](~~149403~~).
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The name of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The ID of the user who created the application.
     *
     * @example tdy218@1362469756xxxxxx
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'         => 'AppId',
        'appName'       => 'AppName',
        'changeOrderId' => 'ChangeOrderId',
        'dockerize'     => 'Dockerize',
        'owner'         => 'Owner',
        'port'          => 'Port',
        'regionName'    => 'RegionName',
        'userId'        => 'UserId',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->dockerize) {
            $res['Dockerize'] = $this->dockerize;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['Dockerize'])) {
            $model->dockerize = $map['Dockerize'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
