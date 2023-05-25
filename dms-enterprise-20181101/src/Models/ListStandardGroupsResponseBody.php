<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListStandardGroupsResponseBody\standardGroupList;
use AlibabaCloud\Tea\Model;

class ListStandardGroupsResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails.
     *
     * @example 403
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request fails.
     *
     * @example xxx
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 34E01EDD-6A16-4CF0-9541-C644D1BE01AA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security rule sets returned.
     *
     * @var standardGroupList[]
     */
    public $standardGroupList;

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
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'requestId'         => 'RequestId',
        'standardGroupList' => 'StandardGroupList',
        'success'           => 'Success',
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
        if (null !== $this->standardGroupList) {
            $res['StandardGroupList'] = [];
            if (null !== $this->standardGroupList && \is_array($this->standardGroupList)) {
                $n = 0;
                foreach ($this->standardGroupList as $item) {
                    $res['StandardGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListStandardGroupsResponseBody
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
        if (isset($map['StandardGroupList'])) {
            if (!empty($map['StandardGroupList'])) {
                $model->standardGroupList = [];
                $n                        = 0;
                foreach ($map['StandardGroupList'] as $item) {
                    $model->standardGroupList[$n++] = null !== $item ? standardGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
