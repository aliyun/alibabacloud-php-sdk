<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryRecordMinutesUrlShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example minutes
     *
     * @var string
     */
    public $bizType;

    /**
     * @description This parameter is required.
     *
     * @example 1dddwrqrq
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'bizType' => 'BizType',
        'conferenceId' => 'ConferenceId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRecordMinutesUrlShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
