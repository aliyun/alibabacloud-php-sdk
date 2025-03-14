<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddCheckResultWhiteListResponseBody extends Model
{
    /**
     * @description The data returned. This parameter is deprecated.
     *
     * @example 1
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C699E4E4-F2F4-58FC-A949-457FFE59****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDs of the whitelist rules that are generated.
     *
     * @var int[]
     */
    public $ruleIds;
    protected $_name = [
        'data' => 'Data',
        'requestId' => 'RequestId',
        'ruleIds' => 'RuleIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCheckResultWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = $map['RuleIds'];
            }
        }

        return $model;
    }
}
