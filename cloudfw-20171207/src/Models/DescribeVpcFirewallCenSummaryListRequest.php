<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeVpcFirewallCenSummaryListRequest extends Model
{
    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $transitRouterType;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'memberUid' => 'MemberUid',
        'pageSize' => 'PageSize',
        'transitRouterType' => 'TransitRouterType',
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

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->transitRouterType) {
            $res['TransitRouterType'] = $this->transitRouterType;
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

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TransitRouterType'])) {
            $model->transitRouterType = $map['TransitRouterType'];
        }

        return $model;
    }
}
