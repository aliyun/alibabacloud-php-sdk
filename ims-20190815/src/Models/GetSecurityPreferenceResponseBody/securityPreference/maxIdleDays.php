<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return maxIdleDays
     */
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
