<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDriverConfigsResponseBody\driverConfigList;
use AlibabaCloud\Tea\Model;

class BatchGetEdgeInstanceDriverConfigsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var driverConfigList[]
     */
    public $driverConfigList;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'driverConfigList' => 'DriverConfigList',
        'errorMessage'     => 'ErrorMessage',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->driverConfigList) {
            $res['DriverConfigList'] = [];
            if (null !== $this->driverConfigList && \is_array($this->driverConfigList)) {
                $n = 0;
                foreach ($this->driverConfigList as $item) {
                    $res['DriverConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return BatchGetEdgeInstanceDriverConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DriverConfigList'])) {
            if (!empty($map['DriverConfigList'])) {
                $model->driverConfigList = [];
                $n                       = 0;
                foreach ($map['DriverConfigList'] as $item) {
                    $model->driverConfigList[$n++] = null !== $item ? driverConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
