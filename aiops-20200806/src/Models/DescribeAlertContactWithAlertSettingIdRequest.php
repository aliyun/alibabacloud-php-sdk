<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertContactWithAlertSettingIdRequest extends Model
{
    /**
     * @var int
     */
    public $alertSettingId;

    /**
     * @var int
     */
    public $contactType;
    protected $_name = [
        'alertSettingId' => 'AlertSettingId',
        'contactType'    => 'ContactType',
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
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertContactWithAlertSettingIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSettingId'])) {
            $model->alertSettingId = $map['AlertSettingId'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }

        return $model;
    }
}
