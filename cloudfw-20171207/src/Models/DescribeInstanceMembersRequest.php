<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceMembersRequest extends Model
{
    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $memberDisplayName;

    /**
     * @var string
     */
    public $memberDesc;
    protected $_name = [
        'currentPage'       => 'CurrentPage',
        'pageSize'          => 'PageSize',
        'memberUid'         => 'MemberUid',
        'memberDisplayName' => 'MemberDisplayName',
        'memberDesc'        => 'MemberDesc',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->memberDisplayName) {
            $res['MemberDisplayName'] = $this->memberDisplayName;
        }
        if (null !== $this->memberDesc) {
            $res['MemberDesc'] = $this->memberDesc;
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['MemberDisplayName'])) {
            $model->memberDisplayName = $map['MemberDisplayName'];
        }
        if (isset($map['MemberDesc'])) {
            $model->memberDesc = $map['MemberDesc'];
        }

        return $model;
    }
}
