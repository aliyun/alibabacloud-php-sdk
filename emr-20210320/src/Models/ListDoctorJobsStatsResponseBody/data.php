<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponseBody\data\appsCount;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponseBody\data\memSeconds;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsResponseBody\data\vcoreSeconds;

class data extends Model
{
    /**
     * @var appsCount
     */
    public $appsCount;
    /**
     * @var memSeconds
     */
    public $memSeconds;
    /**
     * @var string
     */
    public $queue;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $user;
    /**
     * @var vcoreSeconds
     */
    public $vcoreSeconds;
    protected $_name = [
        'appsCount'    => 'AppsCount',
        'memSeconds'   => 'MemSeconds',
        'queue'        => 'Queue',
        'type'         => 'Type',
        'user'         => 'User',
        'vcoreSeconds' => 'VcoreSeconds',
    ];

    public function validate()
    {
        if (null !== $this->appsCount) {
            $this->appsCount->validate();
        }
        if (null !== $this->memSeconds) {
            $this->memSeconds->validate();
        }
        if (null !== $this->vcoreSeconds) {
            $this->vcoreSeconds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appsCount) {
            $res['AppsCount'] = null !== $this->appsCount ? $this->appsCount->toArray($noStream) : $this->appsCount;
        }

        if (null !== $this->memSeconds) {
            $res['MemSeconds'] = null !== $this->memSeconds ? $this->memSeconds->toArray($noStream) : $this->memSeconds;
        }

        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = null !== $this->vcoreSeconds ? $this->vcoreSeconds->toArray($noStream) : $this->vcoreSeconds;
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
        if (isset($map['AppsCount'])) {
            $model->appsCount = appsCount::fromMap($map['AppsCount']);
        }

        if (isset($map['MemSeconds'])) {
            $model->memSeconds = memSeconds::fromMap($map['MemSeconds']);
        }

        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        if (isset($map['VcoreSeconds'])) {
            $model->vcoreSeconds = vcoreSeconds::fromMap($map['VcoreSeconds']);
        }

        return $model;
    }
}
