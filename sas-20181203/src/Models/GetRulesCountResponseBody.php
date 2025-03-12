<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetRulesCountResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example BE120DAB-F4E7-4C53-ADC3-A97578AB****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of system defense rules.
     *
     * @example 10
     *
     * @var int
     */
    public $totalSystemClientRuleCount;

    /**
     * @description The total number of custom defense rules.
     *
     * @example 10
     *
     * @var int
     */
    public $totalUserDefineRuleCount;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'totalSystemClientRuleCount' => 'TotalSystemClientRuleCount',
        'totalUserDefineRuleCount'   => 'TotalUserDefineRuleCount',
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
        if (null !== $this->totalSystemClientRuleCount) {
            $res['TotalSystemClientRuleCount'] = $this->totalSystemClientRuleCount;
        }
        if (null !== $this->totalUserDefineRuleCount) {
            $res['TotalUserDefineRuleCount'] = $this->totalUserDefineRuleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRulesCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalSystemClientRuleCount'])) {
            $model->totalSystemClientRuleCount = $map['TotalSystemClientRuleCount'];
        }
        if (isset($map['TotalUserDefineRuleCount'])) {
            $model->totalUserDefineRuleCount = $map['TotalUserDefineRuleCount'];
        }

        return $model;
    }
}
