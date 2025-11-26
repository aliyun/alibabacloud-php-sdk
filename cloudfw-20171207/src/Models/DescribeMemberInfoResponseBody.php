<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeMemberInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $adminName;

    /**
     * @var string
     */
    public $adminUid;

    /**
     * @var bool
     */
    public $isMember;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'adminName' => 'AdminName',
        'adminUid' => 'AdminUid',
        'isMember' => 'IsMember',
        'memberUid' => 'MemberUid',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminName) {
            $res['AdminName'] = $this->adminName;
        }

        if (null !== $this->adminUid) {
            $res['AdminUid'] = $this->adminUid;
        }

        if (null !== $this->isMember) {
            $res['IsMember'] = $this->isMember;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AdminName'])) {
            $model->adminName = $map['AdminName'];
        }

        if (isset($map['AdminUid'])) {
            $model->adminUid = $map['AdminUid'];
        }

        if (isset($map['IsMember'])) {
            $model->isMember = $map['IsMember'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
