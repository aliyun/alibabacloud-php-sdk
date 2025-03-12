<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaPluginStatusResponseBody\installStatus;
use AlibabaCloud\Tea\Model;

class GetOpaPluginStatusResponseBody extends Model
{
    /**
     * @description The installation status of the components that are required for clusters protected by proactive defense for containers.
     *
     * @var installStatus[]
     */
    public $installStatus;

    /**
     * @description The request ID.
     *
     * @example 09969D2C-4FAD-429E-BFBF-9A60DEF8BF6F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'installStatus' => 'InstallStatus',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->installStatus) {
            $res['InstallStatus'] = [];
            if (null !== $this->installStatus && \is_array($this->installStatus)) {
                $n = 0;
                foreach ($this->installStatus as $item) {
                    $res['InstallStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpaPluginStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstallStatus'])) {
            if (!empty($map['InstallStatus'])) {
                $model->installStatus = [];
                $n                    = 0;
                foreach ($map['InstallStatus'] as $item) {
                    $model->installStatus[$n++] = null !== $item ? installStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
