<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionManagementResponseBody\versionDetails;
use AlibabaCloud\Tea\Model;

class DescribeVersionManagementResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var versionDetails[]
     */
    public $versionDetails;
    protected $_name = [
        'requestId'      => 'RequestId',
        'versionDetails' => 'VersionDetails',
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
        if (null !== $this->versionDetails) {
            $res['VersionDetails'] = [];
            if (null !== $this->versionDetails && \is_array($this->versionDetails)) {
                $n = 0;
                foreach ($this->versionDetails as $item) {
                    $res['VersionDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVersionManagementResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VersionDetails'])) {
            if (!empty($map['VersionDetails'])) {
                $model->versionDetails = [];
                $n                     = 0;
                foreach ($map['VersionDetails'] as $item) {
                    $model->versionDetails[$n++] = null !== $item ? versionDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
