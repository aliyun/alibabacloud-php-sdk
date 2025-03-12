<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyImageRegistryRequest extends Model
{
    /**
     * @description The ID of the image repository. You can call the listImageRegistry operation to query the ID of the image repository.
     *
     * @example 390103286
     *
     * @var int
     */
    public $id;

    /**
     * @description The password.
     *
     * @example ********************
     *
     * @var string
     */
    public $password;

    /**
     * @description The number of images that are scanned per hour.
     *
     * @example 10
     *
     * @var int
     */
    public $transPerHour;

    /**
     * @description The username.
     *
     * @example xxxx
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'id'           => 'Id',
        'password'     => 'Password',
        'transPerHour' => 'TransPerHour',
        'userName'     => 'UserName',
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->transPerHour) {
            $res['TransPerHour'] = $this->transPerHour;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImageRegistryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['TransPerHour'])) {
            $model->transPerHour = $map['TransPerHour'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
