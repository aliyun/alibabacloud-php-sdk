<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBResourceManagementModeResponseBody extends Model
{
    /**
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @example resourceGroup
     *
     * @var string
     */
    public $resourceManagementMode;
    protected $_name = [
        'requestId'              => 'RequestId',
        'resourceManagementMode' => 'ResourceManagementMode',
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
        if (null !== $this->resourceManagementMode) {
            $res['ResourceManagementMode'] = $this->resourceManagementMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBResourceManagementModeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceManagementMode'])) {
            $model->resourceManagementMode = $map['ResourceManagementMode'];
        }

        return $model;
    }
}
