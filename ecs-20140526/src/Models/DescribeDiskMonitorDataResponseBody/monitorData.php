<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponseBody\monitorData\diskMonitorData;

class monitorData extends Model
{
    /**
     * @var diskMonitorData[]
     */
    public $diskMonitorData;
    protected $_name = [
        'diskMonitorData' => 'DiskMonitorData',
    ];

    public function validate()
    {
        if (\is_array($this->diskMonitorData)) {
            Model::validateArray($this->diskMonitorData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskMonitorData) {
            if (\is_array($this->diskMonitorData)) {
                $res['DiskMonitorData'] = [];
                $n1 = 0;
                foreach ($this->diskMonitorData as $item1) {
                    $res['DiskMonitorData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DiskMonitorData'])) {
            if (!empty($map['DiskMonitorData'])) {
                $model->diskMonitorData = [];
                $n1 = 0;
                foreach ($map['DiskMonitorData'] as $item1) {
                    $model->diskMonitorData[$n1] = diskMonitorData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
