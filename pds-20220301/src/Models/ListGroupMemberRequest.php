<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListGroupMemberRequest extends Model
{
    /**
     * @description The ID of the group of which you want to query members.
     *
     * @example 3e5***2c2
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The total number of returned entries.
     *
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker.\
     * By default, this parameter is left empty.
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @description The member type. If you do not specify this parameter, both types of members are returned. Valid values:
     *
     *   user
     *   group
     *
     * Note: A group can be a member of only one group. It cannot be a member of multiple groups. A user can be a member of multiple groups.
     * @example user
     *
     * @var string
     */
    public $memberType;
    protected $_name = [
        'groupId'    => 'group_id',
        'limit'      => 'limit',
        'marker'     => 'marker',
        'memberType' => 'member_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->memberType) {
            $res['member_type'] = $this->memberType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group_id'])) {
            $model->groupId = $map['group_id'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['member_type'])) {
            $model->memberType = $map['member_type'];
        }

        return $model;
    }
}
