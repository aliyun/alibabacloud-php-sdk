<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateSearchDomeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $resId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
