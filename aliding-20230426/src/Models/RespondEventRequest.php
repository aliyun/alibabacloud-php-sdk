<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\RespondEventRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class RespondEventRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @description This parameter is required.
     *
     * @example RHN2REJFc2w4VHNiUUlvcVB0ejFydz09
     *
     * @var string
     */
    public $eventId;

    /**
     * @description This parameter is required.
     *
     * @example accepted
     *
     * @var string
     */
    public $responseStatus;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'calendarId'     => 'CalendarId',
        'eventId'        => 'EventId',
        'responseStatus' => 'ResponseStatus',
        'tenantContext'  => 'TenantContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->responseStatus) {
            $res['ResponseStatus'] = $this->responseStatus;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RespondEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['ResponseStatus'])) {
            $model->responseStatus = $map['ResponseStatus'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
