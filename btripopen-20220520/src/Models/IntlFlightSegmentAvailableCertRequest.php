<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IntlFlightSegmentAvailableCertRequest extends Model
{
    /**
     * @example ZJTD
     *
     * @var string
     */
    public $isvName;

    /**
     * @example chinese
     *
     * @var string
     */
    public $language;

    /**
     * @example 21341234
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'isvName'  => 'isv_name',
        'language' => 'language',
        'userId'   => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isvName) {
            $res['isv_name'] = $this->isvName;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IntlFlightSegmentAvailableCertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isv_name'])) {
            $model->isvName = $map['isv_name'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
