<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveMessageGroupBandResponseBody extends Model
{
    /**
     * @description The list of users that were muted separately, but not by muting the entire group.
     *
     * @var string[]
     */
    public $bannedUserList;

    /**
     * @description The group ID.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Indicates whether all users in the interactive messaging group are muted.
     *
     * @example false
     *
     * @var bool
     */
    public $isbannedAll;

    /**
     * @description The request ID.
     *
     * @example 021D1FE7-2E87-16AC-9364-4E7EA47C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of users who were not muted when the entire group was muted.
     *
     * @var string[]
     */
    public $unbannedUserList;
    protected $_name = [
        'bannedUserList' => 'BannedUserList',
        'groupId' => 'GroupId',
        'isbannedAll' => 'IsbannedAll',
        'requestId' => 'RequestId',
        'unbannedUserList' => 'UnbannedUserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bannedUserList) {
            $res['BannedUserList'] = $this->bannedUserList;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isbannedAll) {
            $res['IsbannedAll'] = $this->isbannedAll;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unbannedUserList) {
            $res['UnbannedUserList'] = $this->unbannedUserList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveMessageGroupBandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BannedUserList'])) {
            if (!empty($map['BannedUserList'])) {
                $model->bannedUserList = $map['BannedUserList'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsbannedAll'])) {
            $model->isbannedAll = $map['IsbannedAll'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UnbannedUserList'])) {
            if (!empty($map['UnbannedUserList'])) {
                $model->unbannedUserList = $map['UnbannedUserList'];
            }
        }

        return $model;
    }
}
