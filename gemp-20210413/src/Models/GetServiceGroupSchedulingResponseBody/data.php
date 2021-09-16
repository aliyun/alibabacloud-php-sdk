<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data\fastScheduling;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data\fineScheduling;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupSchedulingResponseBody\data\users;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 排班方式 FAST 快速排班 FINE 精细排班
     *
     * @var string
     */
    public $schedulingWay;

    /**
     * @description 服务组ID
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @description 快速排班
     *
     * @var fastScheduling
     */
    public $fastScheduling;

    /**
     * @description 精细排班
     *
     * @var fineScheduling
     */
    public $fineScheduling;

    /**
     * @description 已经排班
     *
     * @var users[]
     */
    public $users;
    protected $_name = [
        'schedulingWay'  => 'schedulingWay',
        'serviceGroupId' => 'serviceGroupId',
        'fastScheduling' => 'fastScheduling',
        'fineScheduling' => 'fineScheduling',
        'users'          => 'users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulingWay) {
            $res['schedulingWay'] = $this->schedulingWay;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->fastScheduling) {
            $res['fastScheduling'] = null !== $this->fastScheduling ? $this->fastScheduling->toMap() : null;
        }
        if (null !== $this->fineScheduling) {
            $res['fineScheduling'] = null !== $this->fineScheduling ? $this->fineScheduling->toMap() : null;
        }
        if (null !== $this->users) {
            $res['users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['schedulingWay'])) {
            $model->schedulingWay = $map['schedulingWay'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['fastScheduling'])) {
            $model->fastScheduling = fastScheduling::fromMap($map['fastScheduling']);
        }
        if (isset($map['fineScheduling'])) {
            $model->fineScheduling = fineScheduling::fromMap($map['fineScheduling']);
        }
        if (isset($map['users'])) {
            if (!empty($map['users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['users'] as $item) {
                    $model->users[$n++] = null !== $item ? users::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
