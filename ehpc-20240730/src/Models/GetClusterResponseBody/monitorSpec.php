<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableComputeLoadMonitor) {
            $res['EnableComputeLoadMonitor'] = $this->enableComputeLoadMonitor;
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
        if (isset($map['EnableComputeLoadMonitor'])) {
            $model->enableComputeLoadMonitor = $map['EnableComputeLoadMonitor'];
        }

        return $model;
    }
}
