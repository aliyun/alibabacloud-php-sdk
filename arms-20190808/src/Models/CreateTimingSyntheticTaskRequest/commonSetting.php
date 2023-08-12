<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\commonSetting\customHost;
use AlibabaCloud\Tea\Model;

class commonSetting extends Model
{
    /**
     * @var customHost
     */
    public $customHost;

    /**
     * @example 0
     *
     * @var int
     */
    public $ipType;

    /**
     * @example 0
     *
     * @var int
     */
    public $monitorSamples;
    protected $_name = [
        'customHost'     => 'CustomHost',
        'ipType'         => 'IpType',
        'monitorSamples' => 'MonitorSamples',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHost) {
            $res['CustomHost'] = null !== $this->customHost ? $this->customHost->toMap() : null;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->monitorSamples) {
            $res['MonitorSamples'] = $this->monitorSamples;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomHost'])) {
            $model->customHost = customHost::fromMap($map['CustomHost']);
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['MonitorSamples'])) {
            $model->monitorSamples = $map['MonitorSamples'];
        }

        return $model;
    }
}
