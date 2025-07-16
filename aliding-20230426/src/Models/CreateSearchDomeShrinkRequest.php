<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateSearchDomeShrinkRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @example 1699265024987
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1030
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
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $userIdListShrink;
    protected $_name = [
        'content' => 'Content',
        'endTime' => 'EndTime',
        'resId' => 'ResId',
        'startTime' => 'StartTime',
        'tenantContextShrink' => 'TenantContext',
        'userIdListShrink' => 'UserIdList',
    ];

    public function validate() {}

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
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->userIdListShrink) {
            $res['UserIdList'] = $this->userIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSearchDomeShrinkRequest
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
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['UserIdList'])) {
            $model->userIdListShrink = $map['UserIdList'];
        }

        return $model;
    }
}
