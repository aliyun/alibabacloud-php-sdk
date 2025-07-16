<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetGroupLiveListRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetGroupLiveListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1398324600000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example cidt*****Xa4K10w==
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @description This parameter is required.
     *
     * @example 1398324600000
     *
     * @var int
     */
    public $startTime;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'endTime' => 'EndTime',
        'openConversationId' => 'OpenConversationId',
        'startTime' => 'StartTime',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->openConversationId) {
            $res['OpenConversationId'] = $this->openConversationId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGroupLiveListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OpenConversationId'])) {
            $model->openConversationId = $map['OpenConversationId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
