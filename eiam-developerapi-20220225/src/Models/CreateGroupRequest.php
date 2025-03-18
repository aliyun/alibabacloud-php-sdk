<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model
{
    /**
     * @example group_2bo6lefcewdausyyxxxx
     *
     * @var string
     */
    public $groupExternalId;

    /**
     * @description This parameter is required.
     *
     * @example name001
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupExternalId' => 'groupExternalId',
        'groupName' => 'groupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupExternalId) {
            $res['groupExternalId'] = $this->groupExternalId;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupExternalId'])) {
            $model->groupExternalId = $map['groupExternalId'];
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        return $model;
    }
}
