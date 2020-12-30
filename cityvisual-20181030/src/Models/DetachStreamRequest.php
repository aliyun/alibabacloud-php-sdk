<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DetachStreamRequest\streams;
use AlibabaCloud\Tea\Model;

class DetachStreamRequest extends Model
{
    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var streams[]
     */
    public $streams;
    protected $_name = [
        'jobGroupId' => 'JobGroupId',
        'regionId'   => 'RegionId',
        'streams'    => 'Streams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streams) {
            $res['Streams'] = [];
            if (null !== $this->streams && \is_array($this->streams)) {
                $n = 0;
                foreach ($this->streams as $item) {
                    $res['Streams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Streams'])) {
            if (!empty($map['Streams'])) {
                $model->streams = [];
                $n              = 0;
                foreach ($map['Streams'] as $item) {
                    $model->streams[$n++] = null !== $item ? streams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
