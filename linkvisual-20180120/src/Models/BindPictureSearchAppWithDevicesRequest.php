<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BindPictureSearchAppWithDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var string[]
     */
    public $deviceIotIds;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'appInstanceId' => 'AppInstanceId',
        'deviceIotIds'  => 'DeviceIotIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->deviceIotIds) {
            $res['DeviceIotIds'] = $this->deviceIotIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindPictureSearchAppWithDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['DeviceIotIds'])) {
            if (!empty($map['DeviceIotIds'])) {
                $model->deviceIotIds = $map['DeviceIotIds'];
            }
        }

        return $model;
    }
}
