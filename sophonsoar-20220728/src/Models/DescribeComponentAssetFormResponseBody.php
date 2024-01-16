<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeComponentAssetFormResponseBody extends Model
{
    /**
     * @description The metadata of the asset in the component. The value is a JSON array and contains the following fields:
     *
     *   **name**: the parameter name.
     *   **defaultValue**: the default parameter value.
     *   **description**: the parameter description.
     *   **required**: indicates whether the parameter is required. Valid values: **true** and **false**.
     *
     * @example [
     * ]
     * @var string
     */
    public $componentAssetForm;

    /**
     * @description The request ID.
     *
     * @example 9D1651AC-31CC-5CC4-A14E-626B3FCC1022
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'componentAssetForm' => 'ComponentAssetForm',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentAssetForm) {
            $res['ComponentAssetForm'] = $this->componentAssetForm;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeComponentAssetFormResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentAssetForm'])) {
            $model->componentAssetForm = $map['ComponentAssetForm'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
