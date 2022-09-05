<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateContactGroupRequest extends Model
{
    /**
     * @var int
     */
    public $contactGroupId;

    /**
     * @var string
     */
    public $contactGroupName;

    /**
     * @var string
     */
    public $contactIds;
    protected $_name = [
        'contactGroupId'   => 'ContactGroupId',
        'contactGroupName' => 'ContactGroupName',
        'contactIds'       => 'ContactIds',
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
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateContactGroupRequest
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
        if (isset($map['ContactIds'])) {
            $model->contactIds = $map['ContactIds'];
        }

        return $model;
    }
}
