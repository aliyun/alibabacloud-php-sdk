<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstanceMembersRequest extends Model
{
    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $memberDesc;

    /**
     * @var string
     */
    public $memberDisplayName;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'memberDesc' => 'MemberDesc',
        'memberDisplayName' => 'MemberDisplayName',
        'memberUid' => 'MemberUid',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
