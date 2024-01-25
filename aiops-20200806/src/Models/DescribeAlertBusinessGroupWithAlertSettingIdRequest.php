<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertBusinessGroupWithAlertSettingIdRequest extends Model
{
    /**
     * @var int
     */
    public $alertSettingId;
    protected $_name = [
        'alertSettingId' => 'AlertSettingId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertSettingId) {
            $res['AlertSettingId'] = $this->alertSettingId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertBusinessGroupWithAlertSettingIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSettingId'])) {
            $model->alertSettingId = $map['AlertSettingId'];
        }

        return $model;
    }
}
