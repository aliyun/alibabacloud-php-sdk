<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class SyncMigrationJobRequest extends Model
{
    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regions;
    protected $_name = [
        'jobType'  => 'jobType',
        'regionId' => 'regionId',
        'regions'  => 'regions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobType) {
            $res['jobType'] = $this->jobType;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->regions) {
            $res['regions'] = $this->regions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncMigrationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['jobType'])) {
            $model->jobType = $map['jobType'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['regions'])) {
            $model->regions = $map['regions'];
        }

        return $model;
    }
}
