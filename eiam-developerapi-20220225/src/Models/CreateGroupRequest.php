<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class CreateGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupExternalId;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupExternalId' => 'groupExternalId',
        'groupName' => 'groupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
