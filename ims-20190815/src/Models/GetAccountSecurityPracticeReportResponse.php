<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponse\accountSecurityPracticeInfo;
use AlibabaCloud\Tea\Model;

class GetAccountSecurityPracticeReportResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var accountSecurityPracticeInfo
     */
    public $accountSecurityPracticeInfo;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'accountSecurityPracticeInfo' => 'AccountSecurityPracticeInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accountSecurityPracticeInfo', $this->accountSecurityPracticeInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->accountSecurityPracticeInfo) {
            $res['AccountSecurityPracticeInfo'] = null !== $this->accountSecurityPracticeInfo ? $this->accountSecurityPracticeInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountSecurityPracticeReportResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccountSecurityPracticeInfo'])) {
            $model->accountSecurityPracticeInfo = accountSecurityPracticeInfo::fromMap($map['AccountSecurityPracticeInfo']);
        }

        return $model;
    }
}
