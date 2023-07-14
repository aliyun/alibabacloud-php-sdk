<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListRetcodeAppsResponseBody\retcodeApps;
use AlibabaCloud\Tea\Model;

class ListRetcodeAppsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 99A663CB-8D7B-4B0D-A006-03C8EE38E7BB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of applications monitored by Browser Monitoring.
     *
     * @var retcodeApps[]
     */
    public $retcodeApps;
    protected $_name = [
        'requestId'   => 'RequestId',
        'retcodeApps' => 'RetcodeApps',
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
        if (null !== $this->retcodeApps) {
            $res['RetcodeApps'] = [];
            if (null !== $this->retcodeApps && \is_array($this->retcodeApps)) {
                $n = 0;
                foreach ($this->retcodeApps as $item) {
                    $res['RetcodeApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRetcodeAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetcodeApps'])) {
            if (!empty($map['RetcodeApps'])) {
                $model->retcodeApps = [];
                $n                  = 0;
                foreach ($map['RetcodeApps'] as $item) {
                    $model->retcodeApps[$n++] = null !== $item ? retcodeApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
