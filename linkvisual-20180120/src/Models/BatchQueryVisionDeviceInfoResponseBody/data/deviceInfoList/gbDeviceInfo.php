<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\BatchQueryVisionDeviceInfoResponseBody\data\deviceInfoList;

use AlibabaCloud\Tea\Model;

class gbDeviceInfo extends Model
{
    /**
     * @var int
     */
    public $deviceProtocol;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var int
     */
    public $netProtocol;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $subProductKey;
    protected $_name = [
        'deviceProtocol' => 'DeviceProtocol',
        'gbId'           => 'GbId',
        'netProtocol'    => 'NetProtocol',
        'nickName'       => 'NickName',
        'password'       => 'Password',
        'subProductKey'  => 'SubProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceProtocol) {
            $res['DeviceProtocol'] = $this->deviceProtocol;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->netProtocol) {
            $res['NetProtocol'] = $this->netProtocol;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->subProductKey) {
            $res['SubProductKey'] = $this->subProductKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gbDeviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceProtocol'])) {
            $model->deviceProtocol = $map['DeviceProtocol'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['NetProtocol'])) {
            $model->netProtocol = $map['NetProtocol'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['SubProductKey'])) {
            $model->subProductKey = $map['SubProductKey'];
        }

        return $model;
    }
}
