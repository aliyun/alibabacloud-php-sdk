<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GrantHonorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $grantReason;

    /**
     * @var string
     */
    public $granterName;

    /**
     * @var string
     */
    public $honorId;

    /**
     * @var bool
     */
    public $noticeAnnouncer;

    /**
     * @var bool
     */
    public $noticeSingle;

    /**
     * @var string
     */
    public $openConversationIdsShrink;

    /**
     * @var int
     */
    public $orgId;

    /**
     * @var string
     */
    public $receiverUserIdsShrink;

    /**
     * @var string
     */
    public $senderUserId;
    protected $_name = [
        'tenantContextShrink' => 'TenantContext',
        'expirationTime' => 'expirationTime',
        'grantReason' => 'grantReason',
        'granterName' => 'granterName',
        'honorId' => 'honorId',
        'noticeAnnouncer' => 'noticeAnnouncer',
        'noticeSingle' => 'noticeSingle',
        'openConversationIdsShrink' => 'openConversationIds',
        'orgId' => 'orgId',
        'receiverUserIdsShrink' => 'receiverUserIds',
        'senderUserId' => 'senderUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
