<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class UploadDeviceNameListRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceNames;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'deviceNames' => 'DeviceNames',
        'productKey'  => 'ProductKey',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceNames) {
            $res['DeviceNames'] = $this->deviceNames;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDeviceNameListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceNames'])) {
            if (!empty($map['DeviceNames'])) {
                $model->deviceNames = $map['DeviceNames'];
            }
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
