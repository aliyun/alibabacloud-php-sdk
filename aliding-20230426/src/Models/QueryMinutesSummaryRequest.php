<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class QueryMinutesSummaryRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example 607452e01401526ee39609e1
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @var string[]
     */
    public $summaryTypeList;
    protected $_name = [
        'tenantContext'   => 'TenantContext',
        'conferenceId'    => 'conferenceId',
        'summaryTypeList' => 'summaryTypeList',
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
        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }
        if (null !== $this->summaryTypeList) {
            $res['summaryTypeList'] = $this->summaryTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMinutesSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }
        if (isset($map['summaryTypeList'])) {
            if (!empty($map['summaryTypeList'])) {
                $model->summaryTypeList = $map['summaryTypeList'];
            }
        }

        return $model;
    }
}
