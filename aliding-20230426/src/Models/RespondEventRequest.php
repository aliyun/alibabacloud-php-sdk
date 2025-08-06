<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RespondEventRequest\tenantContext;

class RespondEventRequest extends Model
{
    /**
     * @var string
     */
    public $calendarId;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $responseStatus;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'calendarId' => 'CalendarId',
        'eventId' => 'EventId',
        'responseStatus' => 'ResponseStatus',
        'tenantContext' => 'TenantContext',
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
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
