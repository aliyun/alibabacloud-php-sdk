<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetDingtalkProjectionInfoRequest\tenantContext;

class GetDingtalkProjectionInfoRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $client;

    /**
     * @var int
     */
    public $endTs;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $pubWorkNo;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var int
     */
    public $startTs;

    /**
     * @var string
     */
    public $subUid;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'client' => 'client',
        'endTs' => 'endTs',
        'orgId' => 'orgId',
        'pubWorkNo' => 'pubWorkNo',
        'roomId' => 'roomId',
        'startTs' => 'startTs',
        'subUid' => 'subUid',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->client) {
            $res['client'] = $this->client;
        }

        if (null !== $this->endTs) {
            $res['endTs'] = $this->endTs;
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }

        if (null !== $this->pubWorkNo) {
            $res['pubWorkNo'] = $this->pubWorkNo;
        }

        if (null !== $this->roomId) {
            $res['roomId'] = $this->roomId;
        }

        if (null !== $this->startTs) {
            $res['startTs'] = $this->startTs;
        }

        if (null !== $this->subUid) {
            $res['subUid'] = $this->subUid;
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

        if (isset($map['client'])) {
            $model->client = $map['client'];
        }

        if (isset($map['endTs'])) {
            $model->endTs = $map['endTs'];
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        if (isset($map['pubWorkNo'])) {
            $model->pubWorkNo = $map['pubWorkNo'];
        }

        if (isset($map['roomId'])) {
            $model->roomId = $map['roomId'];
        }

        if (isset($map['startTs'])) {
            $model->startTs = $map['startTs'];
        }

        if (isset($map['subUid'])) {
            $model->subUid = $map['subUid'];
        }

        return $model;
    }
}
