<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDesensitizationRuleResponseBody\desensitizationRuleList;

class ListDesensitizationRuleResponseBody extends Model
{
    /**
     * @var desensitizationRuleList[]
     */
    public $desensitizationRuleList;

    /**
     * @var string
     */
    public $errorCode;

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

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'desensitizationRuleList' => 'DesensitizationRuleList',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->desensitizationRuleList)) {
            Model::validateArray($this->desensitizationRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desensitizationRuleList) {
            if (\is_array($this->desensitizationRuleList)) {
                $res['DesensitizationRuleList'] = [];
                $n1 = 0;
                foreach ($this->desensitizationRuleList as $item1) {
                    $res['DesensitizationRuleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesensitizationRuleList'])) {
            if (!empty($map['DesensitizationRuleList'])) {
                $model->desensitizationRuleList = [];
                $n1 = 0;
                foreach ($map['DesensitizationRuleList'] as $item1) {
                    $model->desensitizationRuleList[$n1++] = desensitizationRuleList::fromMap($item1);
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
