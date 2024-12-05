<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody;

use AlibabaCloud\Tea\Model;

class monitorSpec extends Model
{
    /**
     * @var bool
     */
    public $enableComputeLoadMonitor;
    protected $_name = [
        'enableComputeLoadMonitor' => 'EnableComputeLoadMonitor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableComputeLoadMonitor) {
            $res['EnableComputeLoadMonitor'] = $this->enableComputeLoadMonitor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableComputeLoadMonitor'])) {
            $model->enableComputeLoadMonitor = $map['EnableComputeLoadMonitor'];
        }

        return $model;
    }
}
