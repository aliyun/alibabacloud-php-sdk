<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesResponseBody\uises\uis;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @var string
     */
    public $clientInfoDBAccount;

    /**
     * @var string
     */
    public $clientInfoDB;

    /**
     * @var string
     */
    public $clientInfoDBPassword;
    protected $_name = [
        'clientInfoDBAccount'  => 'ClientInfoDBAccount',
        'clientInfoDB'         => 'ClientInfoDB',
        'clientInfoDBPassword' => 'ClientInfoDBPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInfoDBAccount) {
            $res['ClientInfoDBAccount'] = $this->clientInfoDBAccount;
        }
        if (null !== $this->clientInfoDB) {
            $res['ClientInfoDB'] = $this->clientInfoDB;
        }
        if (null !== $this->clientInfoDBPassword) {
            $res['ClientInfoDBPassword'] = $this->clientInfoDBPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInfoDBAccount'])) {
            $model->clientInfoDBAccount = $map['ClientInfoDBAccount'];
        }
        if (isset($map['ClientInfoDB'])) {
            $model->clientInfoDB = $map['ClientInfoDB'];
        }
        if (isset($map['ClientInfoDBPassword'])) {
            $model->clientInfoDBPassword = $map['ClientInfoDBPassword'];
        }

        return $model;
    }
}
