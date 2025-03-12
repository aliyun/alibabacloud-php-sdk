<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreRuleList;
use AlibabaCloud\Tea\Model;

class GetSecurityScoreRuleResponseBody extends Model
{
    /**
     * @description The status of the custom settings of the security score feature.
     *
     *   true: enabled
     *   false: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $enableStatus;

    /**
     * @description The request ID.
     *
     * @example F8B6F758-BCD4-597A-8A2C-DA5A552C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of deduction modules that are supported by the security score feature.
     *
     * @var securityScoreRuleList[]
     */
    public $securityScoreRuleList;
    protected $_name = [
        'enableStatus'          => 'EnableStatus',
        'requestId'             => 'RequestId',
        'securityScoreRuleList' => 'SecurityScoreRuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityScoreRuleList) {
            $res['SecurityScoreRuleList'] = [];
            if (null !== $this->securityScoreRuleList && \is_array($this->securityScoreRuleList)) {
                $n = 0;
                foreach ($this->securityScoreRuleList as $item) {
                    $res['SecurityScoreRuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecurityScoreRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityScoreRuleList'])) {
            if (!empty($map['SecurityScoreRuleList'])) {
                $model->securityScoreRuleList = [];
                $n                            = 0;
                foreach ($map['SecurityScoreRuleList'] as $item) {
                    $model->securityScoreRuleList[$n++] = null !== $item ? securityScoreRuleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
