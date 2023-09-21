<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\CreateOpaClusterPluginResponseBody\installStatus;
use AlibabaCloud\Tea\Model;

class CreateOpaClusterPluginResponseBody extends Model
{
    /**
     * @var installStatus[]
     */
    public $installStatus;

    /**
     * @example D65AADFC-1D20-5A6A-8F6A-9FA53C0DC1F8
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
     * @return CreateOpaClusterPluginResponseBody
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
