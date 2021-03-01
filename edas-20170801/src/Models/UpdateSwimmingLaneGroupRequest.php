<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateSwimmingLaneGroupRequest extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $entryApp;

    /**
     * @var string
     */
    public $appIds;
    protected $_name = [
        'groupId'  => 'GroupId',
        'name'     => 'Name',
        'entryApp' => 'EntryApp',
        'appIds'   => 'AppIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSwimmingLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }

        return $model;
    }
}
