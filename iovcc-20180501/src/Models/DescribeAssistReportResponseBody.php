<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssistReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $assistId;

    /**
     * @var string
     */
    public $assistDescription;

    /**
     * @var string
     */
    public $assistResult;

    /**
     * @var string
     */
    public $assistReason;

    /**
     * @var string
     */
    public $assistTag;
    protected $_name = [
        'requestId'         => 'RequestId',
        'assistId'          => 'AssistId',
        'assistDescription' => 'AssistDescription',
        'assistResult'      => 'AssistResult',
        'assistReason'      => 'AssistReason',
        'assistTag'         => 'AssistTag',
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
        if (null !== $this->assistId) {
            $res['AssistId'] = $this->assistId;
        }
        if (null !== $this->assistDescription) {
            $res['AssistDescription'] = $this->assistDescription;
        }
        if (null !== $this->assistResult) {
            $res['AssistResult'] = $this->assistResult;
        }
        if (null !== $this->assistReason) {
            $res['AssistReason'] = $this->assistReason;
        }
        if (null !== $this->assistTag) {
            $res['AssistTag'] = $this->assistTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssistReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AssistId'])) {
            $model->assistId = $map['AssistId'];
        }
        if (isset($map['AssistDescription'])) {
            $model->assistDescription = $map['AssistDescription'];
        }
        if (isset($map['AssistResult'])) {
            $model->assistResult = $map['AssistResult'];
        }
        if (isset($map['AssistReason'])) {
            $model->assistReason = $map['AssistReason'];
        }
        if (isset($map['AssistTag'])) {
            $model->assistTag = $map['AssistTag'];
        }

        return $model;
    }
}
