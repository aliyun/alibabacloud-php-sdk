<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest;

use AlibabaCloud\Tea\Model;

class rdsMysqlInfo extends Model
{
    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $connectUrl;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $password;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $regionId;

    /**
     * @description -
     *
     * @example -
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'connectUrl' => 'ConnectUrl',
        'password'   => 'Password',
        'regionId'   => 'RegionId',
        'userName'   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectUrl) {
            $res['ConnectUrl'] = $this->connectUrl;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsMysqlInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
