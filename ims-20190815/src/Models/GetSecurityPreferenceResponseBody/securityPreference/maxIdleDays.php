<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Dara\Model;

class maxIdleDays extends Model
{
    /**
     * @var int
     */
    public $maxIdleDaysForAccessKeys;
    /**
     * @var int
     */
    public $maxIdleDaysForUsers;
    protected $_name = [
        'maxIdleDaysForAccessKeys' => 'MaxIdleDaysForAccessKeys',
        'maxIdleDaysForUsers'      => 'MaxIdleDaysForUsers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxIdleDaysForAccessKeys) {
            $res['MaxIdleDaysForAccessKeys'] = $this->maxIdleDaysForAccessKeys;
        }

        if (null !== $this->maxIdleDaysForUsers) {
            $res['MaxIdleDaysForUsers'] = $this->maxIdleDaysForUsers;
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
        if (isset($map['MaxIdleDaysForAccessKeys'])) {
            $model->maxIdleDaysForAccessKeys = $map['MaxIdleDaysForAccessKeys'];
        }

        if (isset($map['MaxIdleDaysForUsers'])) {
            $model->maxIdleDaysForUsers = $map['MaxIdleDaysForUsers'];
        }

        return $model;
    }
}
