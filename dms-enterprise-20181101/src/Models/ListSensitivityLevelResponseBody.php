<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitivityLevelResponseBody\sensitivityLevelList;
use AlibabaCloud\Tea\Model;

class ListSensitivityLevelResponseBody extends Model
{
    /**
     * @description The status code.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 4E1D2B4D-3E53-4ABC-999D-1D2520B3471A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sensitivity levels.
     *
     * @var sensitivityLevelList[]
     */
    public $sensitivityLevelList;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'            => 'ErrorCode',
        'errorMessage'         => 'ErrorMessage',
        'requestId'            => 'RequestId',
        'sensitivityLevelList' => 'SensitivityLevelList',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sensitivityLevelList) {
            $res['SensitivityLevelList'] = [];
            if (null !== $this->sensitivityLevelList && \is_array($this->sensitivityLevelList)) {
                $n = 0;
                foreach ($this->sensitivityLevelList as $item) {
                    $res['SensitivityLevelList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListSensitivityLevelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SensitivityLevelList'])) {
            if (!empty($map['SensitivityLevelList'])) {
                $model->sensitivityLevelList = [];
                $n                           = 0;
                foreach ($map['SensitivityLevelList'] as $item) {
                    $model->sensitivityLevelList[$n++] = null !== $item ? sensitivityLevelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
