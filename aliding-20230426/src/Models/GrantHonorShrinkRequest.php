<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GrantHonorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @example null
     *
     * @var int
     */
    public $expirationTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $grantReason;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $granterName;

    /**
     * @description This parameter is required.
     *
     * @example 21659398
     *
     * @var string
     */
    public $honorId;

    /**
     * @example false
     *
     * @var bool
     */
    public $noticeAnnouncer;

    /**
     * @example false
     *
     * @var bool
     */
    public $noticeSingle;

    /**
     * @var string
     */
    public $openConversationIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 345391052
     *
     * @var int
     */
    public $orgId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $receiverUserIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example 363784
     *
     * @var string
     */
    public $senderUserId;
    protected $_name = [
        'tenantContextShrink'       => 'TenantContext',
        'expirationTime'            => 'expirationTime',
        'grantReason'               => 'grantReason',
        'granterName'               => 'granterName',
        'honorId'                   => 'honorId',
        'noticeAnnouncer'           => 'noticeAnnouncer',
        'noticeSingle'              => 'noticeSingle',
        'openConversationIdsShrink' => 'openConversationIds',
        'orgId'                     => 'orgId',
        'receiverUserIdsShrink'     => 'receiverUserIds',
        'senderUserId'              => 'senderUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }
        if (null !== $this->grantReason) {
            $res['grantReason'] = $this->grantReason;
        }
        if (null !== $this->granterName) {
            $res['granterName'] = $this->granterName;
        }
        if (null !== $this->honorId) {
            $res['honorId'] = $this->honorId;
        }
        if (null !== $this->noticeAnnouncer) {
            $res['noticeAnnouncer'] = $this->noticeAnnouncer;
        }
        if (null !== $this->noticeSingle) {
            $res['noticeSingle'] = $this->noticeSingle;
        }
        if (null !== $this->openConversationIdsShrink) {
            $res['openConversationIds'] = $this->openConversationIdsShrink;
        }
        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }
        if (null !== $this->receiverUserIdsShrink) {
            $res['receiverUserIds'] = $this->receiverUserIdsShrink;
        }
        if (null !== $this->senderUserId) {
            $res['senderUserId'] = $this->senderUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantHonorShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }
        if (isset($map['grantReason'])) {
            $model->grantReason = $map['grantReason'];
        }
        if (isset($map['granterName'])) {
            $model->granterName = $map['granterName'];
        }
        if (isset($map['honorId'])) {
            $model->honorId = $map['honorId'];
        }
        if (isset($map['noticeAnnouncer'])) {
            $model->noticeAnnouncer = $map['noticeAnnouncer'];
        }
        if (isset($map['noticeSingle'])) {
            $model->noticeSingle = $map['noticeSingle'];
        }
        if (isset($map['openConversationIds'])) {
            $model->openConversationIdsShrink = $map['openConversationIds'];
        }
        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }
        if (isset($map['receiverUserIds'])) {
            $model->receiverUserIdsShrink = $map['receiverUserIds'];
        }
        if (isset($map['senderUserId'])) {
            $model->senderUserId = $map['senderUserId'];
        }

        return $model;
    }
}
