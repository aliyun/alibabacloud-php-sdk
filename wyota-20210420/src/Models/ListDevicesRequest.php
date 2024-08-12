<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class ListDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $buildId;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $deviceIpV4;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceOS;

    /**
     * @var string
     */
    public $devicePlatform;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $labelContent;

    /**
     * @var string
     */
    public $labelId;

    /**
     * @var string
     */
    public $locationInfo;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $serialNo;

    /**
     * @var string
     */
    public $userType;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alias'          => 'Alias',
        'buildId'        => 'BuildId',
        'clientType'     => 'ClientType',
        'deviceGroupId'  => 'DeviceGroupId',
        'deviceIpV4'     => 'DeviceIpV4',
        'deviceName'     => 'DeviceName',
        'deviceOS'       => 'DeviceOS',
        'devicePlatform' => 'DevicePlatform',
        'endUserId'      => 'EndUserId',
        'labelContent'   => 'LabelContent',
        'labelId'        => 'LabelId',
        'locationInfo'   => 'LocationInfo',
        'model'          => 'Model',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'serialNo'       => 'SerialNo',
        'userType'       => 'UserType',
        'uuid'           => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->buildId) {
            $res['BuildId'] = $this->buildId;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->deviceIpV4) {
            $res['DeviceIpV4'] = $this->deviceIpV4;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceOS) {
            $res['DeviceOS'] = $this->deviceOS;
        }
        if (null !== $this->devicePlatform) {
            $res['DevicePlatform'] = $this->devicePlatform;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->labelContent) {
            $res['LabelContent'] = $this->labelContent;
        }
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }
        if (null !== $this->locationInfo) {
            $res['LocationInfo'] = $this->locationInfo;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['BuildId'])) {
            $model->buildId = $map['BuildId'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['DeviceIpV4'])) {
            $model->deviceIpV4 = $map['DeviceIpV4'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceOS'])) {
            $model->deviceOS = $map['DeviceOS'];
        }
        if (isset($map['DevicePlatform'])) {
            $model->devicePlatform = $map['DevicePlatform'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['LabelContent'])) {
            $model->labelContent = $map['LabelContent'];
        }
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }
        if (isset($map['LocationInfo'])) {
            $model->locationInfo = $map['LocationInfo'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
