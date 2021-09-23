<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceUpgradeInfoResponseBody\instanceUpgradeInfo;

use AlibabaCloud\Tea\Model;

class invalidPeriodList extends Model
{
    /**
     * @var int
     */
    public $invalidEndTime;

    /**
     * @var int
     */
    public $invalidStartTime;
    protected $_name = [
        'invalidEndTime'   => 'InvalidEndTime',
        'invalidStartTime' => 'InvalidStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidEndTime) {
            $res['InvalidEndTime'] = $this->invalidEndTime;
        }
        if (null !== $this->invalidStartTime) {
            $res['InvalidStartTime'] = $this->invalidStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidPeriodList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidEndTime'])) {
            $model->invalidEndTime = $map['InvalidEndTime'];
        }
        if (isset($map['InvalidStartTime'])) {
            $model->invalidStartTime = $map['InvalidStartTime'];
        }

        return $model;
    }
}
