<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats;

use AlibabaCloud\Tea\Model;

class ioQueued extends Model
{
    /**
     * @var string
     */
    public $stats;

    /**
     * @var int
     */
    public $minor;

    /**
     * @var int
     */
    public $major;

    /**
     * @var string
     */
    public $device;
    protected $_name = [
        'stats'  => 'Stats',
        'minor'  => 'Minor',
        'major'  => 'Major',
        'device' => 'Device',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stats) {
            $res['Stats'] = $this->stats;
        }
        if (null !== $this->minor) {
            $res['Minor'] = $this->minor;
        }
        if (null !== $this->major) {
            $res['Major'] = $this->major;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ioQueued
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stats'])) {
            $model->stats = $map['Stats'];
        }
        if (isset($map['Minor'])) {
            $model->minor = $map['Minor'];
        }
        if (isset($map['Major'])) {
            $model->major = $map['Major'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }

        return $model;
    }
}
