<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateWafRulesResponseBody extends Model
{
    /**
     * @var int[]
     */
    public $ids;

    /**
     * @description Id of the request
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $rulesetId;
    protected $_name = [
        'ids'       => 'Ids',
        'requestId' => 'RequestId',
        'rulesetId' => 'RulesetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rulesetId) {
            $res['RulesetId'] = $this->rulesetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateWafRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RulesetId'])) {
            $model->rulesetId = $map['RulesetId'];
        }

        return $model;
    }
}
