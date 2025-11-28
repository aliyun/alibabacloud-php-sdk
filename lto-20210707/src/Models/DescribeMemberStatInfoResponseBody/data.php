<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeMemberStatInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $authorizedCount;

    /**
     * @var int
     */
    public $bizChainCount;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var int
     */
    public $usedCount;
    protected $_name = [
        'authorizedCount' => 'AuthorizedCount',
        'bizChainCount' => 'BizChainCount',
        'memberId' => 'MemberId',
        'memberName' => 'MemberName',
        'usedCount' => 'UsedCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedCount) {
            $res['AuthorizedCount'] = $this->authorizedCount;
        }

        if (null !== $this->bizChainCount) {
            $res['BizChainCount'] = $this->bizChainCount;
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
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
        if (isset($map['AuthorizedCount'])) {
            $model->authorizedCount = $map['AuthorizedCount'];
        }

        if (isset($map['BizChainCount'])) {
            $model->bizChainCount = $map['BizChainCount'];
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }

        return $model;
    }
}
