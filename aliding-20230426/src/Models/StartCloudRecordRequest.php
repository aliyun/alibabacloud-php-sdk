<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordRequest\tenantContext;

class StartCloudRecordRequest extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $smallWindowPosition;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $conferenceId;
    protected $_name = [
        'mode' => 'Mode',
        'smallWindowPosition' => 'SmallWindowPosition',
        'tenantContext' => 'TenantContext',
        'conferenceId' => 'conferenceId',
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
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->smallWindowPosition) {
            $res['SmallWindowPosition'] = $this->smallWindowPosition;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['SmallWindowPosition'])) {
            $model->smallWindowPosition = $map['SmallWindowPosition'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        return $model;
    }
}
