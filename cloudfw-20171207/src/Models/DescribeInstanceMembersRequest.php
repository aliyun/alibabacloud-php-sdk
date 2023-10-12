<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceMembersRequest extends Model
{
    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The remarks of the member. The remarks must be 1 to 256 characters in length.
     *
     * @example renewal
     *
     * @var string
     */
    public $memberDesc;

    /**
     * @description The name of the member.
     *
     * @example cloudfirewall_2
     *
     * @var string
     */
    public $memberDisplayName;

    /**
     * @description The UID of the member.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The number of entries per page.
     *
     * Default value: **20**.
     * @example 20
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'memberDesc'        => 'MemberDesc',
        'memberDisplayName' => 'MemberDisplayName',
        'memberUid'         => 'MemberUid',
        'pageSize'          => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->memberDesc) {
            $res['MemberDesc'] = $this->memberDesc;
        }
        if (null !== $this->memberDisplayName) {
            $res['MemberDisplayName'] = $this->memberDisplayName;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['MemberDesc'])) {
            $model->memberDesc = $map['MemberDesc'];
        }
        if (isset($map['MemberDisplayName'])) {
            $model->memberDisplayName = $map['MemberDisplayName'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
