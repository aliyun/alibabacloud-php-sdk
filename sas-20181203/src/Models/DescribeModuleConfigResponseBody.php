<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeModuleConfigResponseBody\moduleConfigList;
use AlibabaCloud\Tea\Model;

class DescribeModuleConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $count;

    /**
     * @var moduleConfigList[]
     */
    public $moduleConfigList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'        => 'RequestId',
        'httpStatusCode'   => 'HttpStatusCode',
        'count'            => 'Count',
        'moduleConfigList' => 'ModuleConfigList',
        'success'          => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ModuleConfigList'])) {
            if (!empty($map['ModuleConfigList'])) {
                $model->moduleConfigList = [];
                $n                       = 0;
                foreach ($map['ModuleConfigList'] as $item) {
                    $model->moduleConfigList[$n++] = null !== $item ? moduleConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
