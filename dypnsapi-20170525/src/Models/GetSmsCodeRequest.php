<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetSmsCodeRequest extends Model
{
    /**
     * @var string
     */
    public $bizToken;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $sceneCode;

    /**
     * @var string
     */
    public $osType;
    protected $_name = [
        'bizToken'    => 'BizToken',
        'phoneNumber' => 'PhoneNumber',
        'sceneCode'   => 'SceneCode',
        'osType'      => 'OsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizToken) {
            $res['BizToken'] = $this->bizToken;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmsCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizToken'])) {
            $model->bizToken = $map['BizToken'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        return $model;
    }
}
