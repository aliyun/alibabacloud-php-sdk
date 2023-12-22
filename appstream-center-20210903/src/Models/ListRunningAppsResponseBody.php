<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListRunningAppsResponseBody\runningCloudApps;
use AlibabaCloud\Tea\Model;

class ListRunningAppsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 2DC3521C-3820-5EA5-9A9A-00BB7AF4E8E5
     *
     * @var string
     */
    public $requestId;

    /**
     * @var runningCloudApps[]
     */
    public $runningCloudApps;
    protected $_name = [
        'requestId'        => 'RequestId',
        'runningCloudApps' => 'RunningCloudApps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->runningCloudApps) {
            $res['RunningCloudApps'] = [];
            if (null !== $this->runningCloudApps && \is_array($this->runningCloudApps)) {
                $n = 0;
                foreach ($this->runningCloudApps as $item) {
                    $res['RunningCloudApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRunningAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RunningCloudApps'])) {
            if (!empty($map['RunningCloudApps'])) {
                $model->runningCloudApps = [];
                $n                       = 0;
                foreach ($map['RunningCloudApps'] as $item) {
                    $model->runningCloudApps[$n++] = null !== $item ? runningCloudApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
