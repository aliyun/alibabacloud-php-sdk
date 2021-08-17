<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models\ListEnterpriseDingtalkGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 钉群ID
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description 钉群名
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'openGroupId' => 'OpenGroupId',
        'groupName'   => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
