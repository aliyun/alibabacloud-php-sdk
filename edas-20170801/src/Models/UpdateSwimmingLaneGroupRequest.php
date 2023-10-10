<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateSwimmingLaneGroupRequest extends Model
{
    /**
     * @description The list of application IDs related to the lane group.
     *
     * @example 8e7689af-6ddd-4676-8ee6-5fbecdf2****,f72deaac-26ba-429a-948d-5fa47c4a****,5049d2c8-f997-4fc9-92a2-153506a6****,99a2d4b5-99a5-4e25-a964-1bd03a17****
     *
     * @var string
     */
    public $appIds;

    /**
     * @description The ingress application. The application is in the EDAS:{application ID} format.
     *
     * @example EDAS:dd2690a7-3fe4-4975-9a4c-5a60ffd6****
     *
     * @var string
     */
    public $entryApp;

    /**
     * @description The ID of the lane group.
     *
     * @example 98
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the lane group.
     *
     * @example test-swimlanegroup
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'appIds'   => 'AppIds',
        'entryApp' => 'EntryApp',
        'groupId'  => 'GroupId',
        'name'     => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
