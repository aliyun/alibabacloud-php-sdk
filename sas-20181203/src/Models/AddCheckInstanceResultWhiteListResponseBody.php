<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddCheckInstanceResultWhiteListResponseBody extends Model
{
    /**
     * @description The data returned. This parameter is deprecated.
     *
     * @example xxx
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example ADE57832-9666-511C-9A80-B87DE2E8****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the whitelist rule.
     *
     * @example 381049
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'ruleId'    => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCheckInstanceResultWhiteListResponseBody
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
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
