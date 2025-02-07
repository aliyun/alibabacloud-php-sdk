<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody\accountSecurityPracticeInfo;

class GetAccountSecurityPracticeReportResponseBody extends Model
{
    /**
     * @var accountSecurityPracticeInfo
     */
    public $accountSecurityPracticeInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountSecurityPracticeInfo' => 'AccountSecurityPracticeInfo',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accountSecurityPracticeInfo) {
            $this->accountSecurityPracticeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountSecurityPracticeInfo) {
            $res['AccountSecurityPracticeInfo'] = null !== $this->accountSecurityPracticeInfo ? $this->accountSecurityPracticeInfo->toArray($noStream) : $this->accountSecurityPracticeInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccountSecurityPracticeInfo'])) {
            $model->accountSecurityPracticeInfo = accountSecurityPracticeInfo::fromMap($map['AccountSecurityPracticeInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
