<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSearchDomeRequest\tenantContext;

class CreateSearchDomeRequest extends Model
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
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
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

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['UserIdList'] = [];
                $n1                = 0;
                foreach ($this->userIdList as $item1) {
                    $res['UserIdList'][$n1++] = $item1;
                }
            }
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = [];
                $n1                = 0;
                foreach ($map['UserIdList'] as $item1) {
                    $model->userIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
