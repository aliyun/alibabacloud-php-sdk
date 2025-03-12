<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\AddClientUserDefineRuleResponseBody\userDefineRuleAddResult;
use AlibabaCloud\Tea\Model;

class AddClientUserDefineRuleResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 379a9b8f-107b-4630-9e95-2299a1ea****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The identifier of the custom defense rule.
     *
     * @var userDefineRuleAddResult
     */
    public $userDefineRuleAddResult;
    protected $_name = [
        'requestId'               => 'RequestId',
        'userDefineRuleAddResult' => 'UserDefineRuleAddResult',
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
        if (null !== $this->userDefineRuleAddResult) {
            $res['UserDefineRuleAddResult'] = null !== $this->userDefineRuleAddResult ? $this->userDefineRuleAddResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddClientUserDefineRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserDefineRuleAddResult'])) {
            $model->userDefineRuleAddResult = userDefineRuleAddResult::fromMap($map['UserDefineRuleAddResult']);
        }

        return $model;
    }
}
