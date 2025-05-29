<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ManageLoginResponseBody;

use AlibabaCloud\Dara\Model;

class loginInfo extends Model
{
    /**
     * @var int
     */
    public $adbLoginPort;

    /**
     * @var string
     */
    public $loginHostname;

    /**
     * @var int
     */
    public $loginPort;
    protected $_name = [
        'adbLoginPort' => 'AdbLoginPort',
        'loginHostname' => 'LoginHostname',
        'loginPort' => 'LoginPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
