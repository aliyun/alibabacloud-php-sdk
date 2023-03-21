<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClientUserDefineRuleResponseBody\userDefineRuleDetail;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userDefineRuleDetail) {
            $res['UserDefineRuleDetail'] = null !== $this->userDefineRuleDetail ? $this->userDefineRuleDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClientUserDefineRuleResponseBody
     */
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
