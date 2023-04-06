<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListGroupMemberRequest extends Model
{
    /**
     * @example 3e5***2c2
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
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
