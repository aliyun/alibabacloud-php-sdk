<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmContactGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contactGroupId;

    /**
     * @var string
     */
    public $contactGroupName;
    protected $_name = [
        'contactGroupId'   => 'ContactGroupId',
        'contactGroupName' => 'ContactGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupId) {
            $res['ContactGroupId'] = $this->contactGroupId;
        }
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupId'])) {
            $model->contactGroupId = $map['ContactGroupId'];
        }
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }

        return $model;
    }
}
