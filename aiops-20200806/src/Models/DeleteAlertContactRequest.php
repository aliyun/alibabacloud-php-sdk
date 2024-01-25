<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlertContactRequest extends Model
{
    /**
     * @var string
     */
    public $contactIdListJson;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'contactIdListJson' => 'ContactIdListJson',
        'groupId'           => 'GroupId',
        'operaUid'          => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactIdListJson) {
            $res['ContactIdListJson'] = $this->contactIdListJson;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlertContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactIdListJson'])) {
            $model->contactIdListJson = $map['ContactIdListJson'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
