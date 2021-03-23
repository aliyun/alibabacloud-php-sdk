<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionGroupDevicesResponseBody\groupDeviceList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $originalId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;
    protected $_name = [
        'id'                 => 'Id',
        'deviceId'           => 'DeviceId',
        'idType'             => 'IdType',
        'originalId'         => 'OriginalId',
        'gmtCreate'          => 'GmtCreate',
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->originalId) {
            $res['OriginalId'] = $this->originalId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['OriginalId'])) {
            $model->originalId = $map['OriginalId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }

        return $model;
    }
}
