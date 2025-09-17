<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudBasicMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class basicMonitors extends Model
{
    /**
     * @var string
     */
    public $levle;

    /**
     * @var string
     */
    public $monitorName;

    /**
     * @var int
     */
    public $useRatio;
    protected $_name = [
        'levle' => 'Levle',
        'monitorName' => 'MonitorName',
        'useRatio' => 'UseRatio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->levle) {
            $res['Levle'] = $this->levle;
        }

        if (null !== $this->monitorName) {
            $res['MonitorName'] = $this->monitorName;
        }

        if (null !== $this->useRatio) {
            $res['UseRatio'] = $this->useRatio;
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
        if (isset($map['Levle'])) {
            $model->levle = $map['Levle'];
        }

        if (isset($map['MonitorName'])) {
            $model->monitorName = $map['MonitorName'];
        }

        if (isset($map['UseRatio'])) {
            $model->useRatio = $map['UseRatio'];
        }

        return $model;
    }
}
