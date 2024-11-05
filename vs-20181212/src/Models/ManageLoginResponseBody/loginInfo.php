<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ManageLoginResponseBody;

use AlibabaCloud\Tea\Model;

class loginInfo extends Model
{
    /**
     * @var int
     */
    public $adbLoginPort;

    /**
     * @example 12.10.4.10
     *
     * @var string
     */
    public $loginHostname;

    /**
     * @example 10004
     *
     * @var int
     */
    public $loginPort;
    protected $_name = [
        'adbLoginPort'  => 'AdbLoginPort',
        'loginHostname' => 'LoginHostname',
        'loginPort'     => 'LoginPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adbLoginPort) {
            $res['AdbLoginPort'] = $this->adbLoginPort;
        }
        if (null !== $this->loginHostname) {
            $res['LoginHostname'] = $this->loginHostname;
        }
        if (null !== $this->loginPort) {
            $res['LoginPort'] = $this->loginPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdbLoginPort'])) {
            $model->adbLoginPort = $map['AdbLoginPort'];
        }
        if (isset($map['LoginHostname'])) {
            $model->loginHostname = $map['LoginHostname'];
        }
        if (isset($map['LoginPort'])) {
            $model->loginPort = $map['LoginPort'];
        }

        return $model;
    }
}
