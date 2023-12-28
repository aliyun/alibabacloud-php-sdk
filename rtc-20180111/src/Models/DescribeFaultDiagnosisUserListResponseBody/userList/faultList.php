<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeFaultDiagnosisUserListResponseBody\userList;

use AlibabaCloud\Tea\Model;

class faultList extends Model
{
    /**
     * @example JOIN_SLOW
     *
     * @var string
     */
    public $faultType;
    protected $_name = [
        'faultType' => 'FaultType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faultType) {
            $res['FaultType'] = $this->faultType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaultType'])) {
            $model->faultType = $map['FaultType'];
        }

        return $model;
    }
}
