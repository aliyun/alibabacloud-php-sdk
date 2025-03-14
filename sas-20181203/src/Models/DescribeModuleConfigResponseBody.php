<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponseBody\moduleConfigList;
use AlibabaCloud\Tea\Model;

class DescribeModuleConfigResponseBody extends Model
{
    /**
     * @description The number of configurations for the module.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description An array that consists of the configurations of the module.
     *
     * @var moduleConfigList[]
     */
    public $moduleConfigList;

    /**
     * @description The request ID.
     *
     * @example 7E0618A9-D5EF-4220-9471-C42B5E92719F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'count' => 'Count',
        'httpStatusCode' => 'HttpStatusCode',
        'moduleConfigList' => 'ModuleConfigList',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->moduleConfigList) {
            $res['ModuleConfigList'] = [];
            if (null !== $this->moduleConfigList && \is_array($this->moduleConfigList)) {
                $n = 0;
                foreach ($this->moduleConfigList as $item) {
                    $res['ModuleConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeModuleConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['ModuleConfigList'])) {
            if (!empty($map['ModuleConfigList'])) {
                $model->moduleConfigList = [];
                $n = 0;
                foreach ($map['ModuleConfigList'] as $item) {
                    $model->moduleConfigList[$n++] = null !== $item ? moduleConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
