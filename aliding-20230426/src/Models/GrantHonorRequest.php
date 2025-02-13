<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GrantHonorRequest\tenantContext;

class GrantHonorRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;
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
     * @var string[]
     */
    public $openConversationIds;
    /**
     * @var int
     */
    public $orgId;
    /**
     * @var string[]
     */
    public $receiverUserIds;
    /**
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
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->openConversationIds)) {
            Model::validateArray($this->openConversationIds);
        }
        if (\is_array($this->receiverUserIds)) {
            Model::validateArray($this->receiverUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
            if (\is_array($this->openConversationIds)) {
                $res['openConversationIds'] = [];
                $n1                         = 0;
                foreach ($this->openConversationIds as $item1) {
                    $res['openConversationIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        if (null !== $this->receiverUserIds) {
            if (\is_array($this->receiverUserIds)) {
                $res['receiverUserIds'] = [];
                $n1                     = 0;
                foreach ($this->receiverUserIds as $item1) {
                    $res['receiverUserIds'][$n1++] = $item1;
                }
            }
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
                $model->openConversationIds = [];
                $n1                         = 0;
                foreach ($map['openConversationIds'] as $item1) {
                    $model->openConversationIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['receiverUserIds'])) {
            if (!empty($map['receiverUserIds'])) {
                $model->receiverUserIds = [];
                $n1                     = 0;
                foreach ($map['receiverUserIds'] as $item1) {
                    $model->receiverUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['senderUserId'])) {
            $model->senderUserId = $map['senderUserId'];
        }

        return $model;
    }
}
