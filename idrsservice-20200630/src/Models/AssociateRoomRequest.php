<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class AssociateRoomRequest extends Model
{
    /**
     * @example 5bbfb884-1186-4d48-906b-88d586770f6b
     *
     * @var string
     */
    public $appId;

    /**
     * @example {"version":"1.0.0"}
     *
     * @var string
     */
    public $clientBaseParam;

    /**
     * @example 1.0.002
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example 5bbfb884-1186-4d48-906b-88d586770f6b
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example 5500707344661
     *
     * @var string
     */
    public $roomId;
    protected $_name = [
        'appId'           => 'AppId',
        'clientBaseParam' => 'ClientBaseParam',
        'clientVersion'   => 'ClientVersion',
        'departmentId'    => 'DepartmentId',
        'roomId'          => 'RoomId',
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
        if (null !== $this->clientBaseParam) {
            $res['ClientBaseParam'] = $this->clientBaseParam;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateRoomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientBaseParam'])) {
            $model->clientBaseParam = $map['ClientBaseParam'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        return $model;
    }
}
