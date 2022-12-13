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
     * @var fastScheduling
     */
    public $fastScheduling;

    /**
     * @var fineScheduling
     */
    public $fineScheduling;

    /**
     * @example FINE
     *
     * @var string
     */
    public $schedulingWay;

    /**
     * @example 99999
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'fastScheduling' => 'fastScheduling',
        'fineScheduling' => 'fineScheduling',
        'schedulingWay'  => 'schedulingWay',
        'serviceGroupId' => 'serviceGroupId',
        'users'          => 'users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fastScheduling) {
            $res['fastScheduling'] = null !== $this->fastScheduling ? $this->fastScheduling->toMap() : null;
        }
        if (null !== $this->fineScheduling) {
            $res['fineScheduling'] = null !== $this->fineScheduling ? $this->fineScheduling->toMap() : null;
        }
        if (null !== $this->schedulingWay) {
            $res['schedulingWay'] = $this->schedulingWay;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
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
        if (isset($map['fastScheduling'])) {
            $model->fastScheduling = fastScheduling::fromMap($map['fastScheduling']);
        }
        if (isset($map['fineScheduling'])) {
            $model->fineScheduling = fineScheduling::fromMap($map['fineScheduling']);
        }
        if (isset($map['schedulingWay'])) {
            $model->schedulingWay = $map['schedulingWay'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
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
