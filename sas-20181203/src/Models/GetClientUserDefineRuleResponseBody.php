<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientUserDefineRuleResponseBody\userDefineRuleDetail;

class GetClientUserDefineRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var userDefineRuleDetail
     */
    public $userDefineRuleDetail;
    protected $_name = [
        'requestId'            => 'RequestId',
        'userDefineRuleDetail' => 'UserDefineRuleDetail',
    ];

    public function validate()
    {
        if (null !== $this->userDefineRuleDetail) {
            $this->userDefineRuleDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userDefineRuleDetail) {
            $res['UserDefineRuleDetail'] = null !== $this->userDefineRuleDetail ? $this->userDefineRuleDetail->toArray($noStream) : $this->userDefineRuleDetail;
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

        if (isset($map['UserDefineRuleDetail'])) {
            $model->userDefineRuleDetail = userDefineRuleDetail::fromMap($map['UserDefineRuleDetail']);
        }

        return $model;
    }
}
