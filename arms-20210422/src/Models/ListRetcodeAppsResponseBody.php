<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\ListRetcodeAppsResponseBody\retcodeApps;
use AlibabaCloud\Tea\Model;

class ListRetcodeAppsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
