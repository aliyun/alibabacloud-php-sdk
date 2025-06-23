<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListRunningAppsResponseBody\runningCloudApps;

class ListRunningAppsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var runningCloudApps[]
     */
    public $runningCloudApps;
    protected $_name = [
        'requestId' => 'RequestId',
        'runningCloudApps' => 'RunningCloudApps',
    ];

    public function validate()
    {
        if (\is_array($this->runningCloudApps)) {
            Model::validateArray($this->runningCloudApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runningCloudApps) {
            if (\is_array($this->runningCloudApps)) {
                $res['RunningCloudApps'] = [];
                $n1 = 0;
                foreach ($this->runningCloudApps as $item1) {
                    $res['RunningCloudApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunningCloudApps'])) {
            if (!empty($map['RunningCloudApps'])) {
                $model->runningCloudApps = [];
                $n1 = 0;
                foreach ($map['RunningCloudApps'] as $item1) {
                    $model->runningCloudApps[$n1] = runningCloudApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
