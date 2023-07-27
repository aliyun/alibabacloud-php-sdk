<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class RtcConfiguration extends Model
{
    /**
     * @example test_replication_rule_1
     *
     * @var string
     */
    public $ID;

    /**
     * @var RTC
     */
    public $RTC;
    protected $_name = [
        'ID'  => 'ID',
        'RTC' => 'RTC',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->RTC) {
            $res['RTC'] = null !== $this->RTC ? $this->RTC->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RtcConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['RTC'])) {
            $model->RTC = RTC::fromMap($map['RTC']);
        }

        return $model;
    }
}
