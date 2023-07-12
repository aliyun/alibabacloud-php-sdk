<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QuerySpeechDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $availableSpace;

    /**
     * @var string
     */
    public $availableSpaceScope;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $pageId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectCode;
    protected $_name = [
        'availableSpace'      => 'AvailableSpace',
        'availableSpaceScope' => 'AvailableSpaceScope',
        'deviceName'          => 'DeviceName',
        'iotInstanceId'       => 'IotInstanceId',
        'pageId'              => 'PageId',
        'pageSize'            => 'PageSize',
        'projectCode'         => 'ProjectCode',
    ];

    public function validate()
    {
        Model::validateRequired('projectCode', $this->projectCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSpace) {
            $res['AvailableSpace'] = $this->availableSpace;
        }
        if (null !== $this->availableSpaceScope) {
            $res['AvailableSpaceScope'] = $this->availableSpaceScope;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectCode) {
            $res['ProjectCode'] = $this->projectCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySpeechDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableSpace'])) {
            $model->availableSpace = $map['AvailableSpace'];
        }
        if (isset($map['AvailableSpaceScope'])) {
            $model->availableSpaceScope = $map['AvailableSpaceScope'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectCode'])) {
            $model->projectCode = $map['ProjectCode'];
        }

        return $model;
    }
}
