<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddClientUserDefineRuleResponseBody\userDefineRuleAddResult;

class AddClientUserDefineRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userDefineRuleAddResult
     */
    public $userDefineRuleAddResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'userDefineRuleAddResult' => 'UserDefineRuleAddResult',
    ];

    public function validate()
    {
        if (null !== $this->userDefineRuleAddResult) {
            $this->userDefineRuleAddResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userDefineRuleAddResult) {
            $res['UserDefineRuleAddResult'] = null !== $this->userDefineRuleAddResult ? $this->userDefineRuleAddResult->toArray($noStream) : $this->userDefineRuleAddResult;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserDefineRuleAddResult'])) {
            $model->userDefineRuleAddResult = userDefineRuleAddResult::fromMap($map['UserDefineRuleAddResult']);
        }

        return $model;
    }
}
