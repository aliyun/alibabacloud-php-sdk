<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponse\data\invalidDetailList;

use AlibabaCloud\Tea\Model;

class invalidDetailList extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $nickName;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'errorMsg'   => 'ErrorMsg',
        'nickName'   => 'NickName',
    ];

    public function validate()
    {
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('errorMsg', $this->errorMsg, true);
        Model::validateRequired('nickName', $this->nickName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        return $model;
    }
}
