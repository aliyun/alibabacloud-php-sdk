<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDesensitizationRuleResponseBody\desensitizationRuleList;
use AlibabaCloud\Tea\Model;

class ListDesensitizationRuleResponseBody extends Model
{
    /**
     * @description The list of masking rules.
     *
     * @var desensitizationRuleList[]
     */
    public $desensitizationRuleList;

    /**
     * @description The error code returned if the request failed.
     *
     * This parameter is required.
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example E76DD2E7-EBAC-5724-B163-19AAC233F8F2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of entries returned. By default, this parameter is not returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'desensitizationRuleList' => 'DesensitizationRuleList',
        'errorCode'               => 'ErrorCode',
        'errorMessage'            => 'ErrorMessage',
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desensitizationRuleList) {
            $res['DesensitizationRuleList'] = [];
            if (null !== $this->desensitizationRuleList && \is_array($this->desensitizationRuleList)) {
                $n = 0;
                foreach ($this->desensitizationRuleList as $item) {
                    $res['DesensitizationRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDesensitizationRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesensitizationRuleList'])) {
            if (!empty($map['DesensitizationRuleList'])) {
                $model->desensitizationRuleList = [];
                $n                              = 0;
                foreach ($map['DesensitizationRuleList'] as $item) {
                    $model->desensitizationRuleList[$n++] = null !== $item ? desensitizationRuleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
