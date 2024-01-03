<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest;

use AlibabaCloud\Tea\Model;

class externalTravelerList extends Model
{
    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userNameEn;
    protected $_name = [
        'userName'   => 'user_name',
        'userNameEn' => 'user_name_en',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->userNameEn) {
            $res['user_name_en'] = $this->userNameEn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return externalTravelerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }
        if (isset($map['user_name_en'])) {
            $model->userNameEn = $map['user_name_en'];
        }

        return $model;
    }
}
