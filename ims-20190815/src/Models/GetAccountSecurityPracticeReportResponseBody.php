<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody\accountSecurityPracticeInfo;
use AlibabaCloud\Tea\Model;

class GetAccountSecurityPracticeReportResponseBody extends Model
{
    /**
     * @var accountSecurityPracticeInfo
     */
    public $accountSecurityPracticeInfo;

    /**
     * @example ABA822EE-85C2-4418-9577-A1831FC8466D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountSecurityPracticeInfo' => 'AccountSecurityPracticeInfo',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountSecurityPracticeInfo) {
            $res['AccountSecurityPracticeInfo'] = null !== $this->accountSecurityPracticeInfo ? $this->accountSecurityPracticeInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountSecurityPracticeReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountSecurityPracticeInfo'])) {
            $model->accountSecurityPracticeInfo = accountSecurityPracticeInfo::fromMap($map['AccountSecurityPracticeInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
