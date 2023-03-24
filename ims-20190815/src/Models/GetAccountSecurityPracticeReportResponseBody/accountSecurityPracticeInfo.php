<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody\accountSecurityPracticeInfo\accountSecurityPracticeUserInfo;
use AlibabaCloud\Tea\Model;

class accountSecurityPracticeInfo extends Model
{
    /**
     * @description The information of the security report for the Alibaba Cloud account.
     *
     * @var accountSecurityPracticeUserInfo
     */
    public $accountSecurityPracticeUserInfo;

    /**
     * @description The security score of the Alibaba Cloud account.
     *
     * @example 63
     *
     * @var int
     */
    public $score;
    protected $_name = [
        'accountSecurityPracticeUserInfo' => 'AccountSecurityPracticeUserInfo',
        'score'                           => 'Score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountSecurityPracticeUserInfo) {
            $res['AccountSecurityPracticeUserInfo'] = null !== $this->accountSecurityPracticeUserInfo ? $this->accountSecurityPracticeUserInfo->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountSecurityPracticeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountSecurityPracticeUserInfo'])) {
            $model->accountSecurityPracticeUserInfo = accountSecurityPracticeUserInfo::fromMap($map['AccountSecurityPracticeUserInfo']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
