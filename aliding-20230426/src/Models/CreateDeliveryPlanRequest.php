<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDeliveryPlanRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateDeliveryPlanRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $content;

    /**
     * @example 1699265024987
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1028
     *
     * @var string
     */
    public $resId;

    /**
     * @example 1699265024987
     *
     * @var int
     */
    public $startTime;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string[]
     */
    public $userIdList;
    protected $_name = [
        'content'       => 'Content',
        'endTime'       => 'EndTime',
        'resId'         => 'ResId',
        'startTime'     => 'StartTime',
        'tenantContext' => 'TenantContext',
        'userIdList'    => 'UserIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->resId) {
            $res['ResId'] = $this->resId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->userIdList) {
            $res['UserIdList'] = $this->userIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeliveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ResId'])) {
            $model->resId = $map['ResId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = $map['UserIdList'];
            }
        }

        return $model;
    }
}
