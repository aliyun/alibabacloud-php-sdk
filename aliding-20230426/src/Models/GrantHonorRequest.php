<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GrantHonorRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GrantHonorRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example null
     *
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
     * @var string[]
     */
    public $openConversationIds;

    /**
     * @example 345391052
     *
     * @var int
     */
    public $orgId;

    /**
     * @var string[]
     */
    public $receiverUserIds;

    /**
     * @example 363784
     *
     * @var string
     */
    public $senderUserId;
    protected $_name = [
        'tenantContext'       => 'TenantContext',
        'expirationTime'      => 'expirationTime',
        'grantReason'         => 'grantReason',
        'granterName'         => 'granterName',
        'honorId'             => 'honorId',
        'noticeAnnouncer'     => 'noticeAnnouncer',
        'noticeSingle'        => 'noticeSingle',
        'openConversationIds' => 'openConversationIds',
        'orgId'               => 'orgId',
        'receiverUserIds'     => 'receiverUserIds',
        'senderUserId'        => 'senderUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
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
        if (null !== $this->openConversationIds) {
            $res['openConversationIds'] = $this->openConversationIds;
        }
        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }
        if (null !== $this->receiverUserIds) {
            $res['receiverUserIds'] = $this->receiverUserIds;
        }
        if (null !== $this->senderUserId) {
            $res['senderUserId'] = $this->senderUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantHonorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
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
            if (!empty($map['openConversationIds'])) {
                $model->openConversationIds = $map['openConversationIds'];
            }
        }
        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }
        if (isset($map['receiverUserIds'])) {
            if (!empty($map['receiverUserIds'])) {
                $model->receiverUserIds = $map['receiverUserIds'];
            }
        }
        if (isset($map['senderUserId'])) {
            $model->senderUserId = $map['senderUserId'];
        }

        return $model;
    }
}
