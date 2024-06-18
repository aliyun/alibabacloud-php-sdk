<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryMinutesSummaryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example 607452e01401526ee39609e1
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @var string
     */
    public $summaryTypeListShrink;
    protected $_name = [
        'tenantContextShrink'   => 'TenantContext',
        'conferenceId'          => 'conferenceId',
        'summaryTypeListShrink' => 'summaryTypeList',
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
        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }
        if (null !== $this->summaryTypeListShrink) {
            $res['summaryTypeList'] = $this->summaryTypeListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMinutesSummaryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }
        if (isset($map['summaryTypeList'])) {
            $model->summaryTypeListShrink = $map['summaryTypeList'];
        }

        return $model;
    }
}
