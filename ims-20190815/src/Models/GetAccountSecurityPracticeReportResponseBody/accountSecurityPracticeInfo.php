<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponseBody\accountSecurityPracticeInfo\accountSecurityPracticeUserInfo;

class accountSecurityPracticeInfo extends Model
{
    /**
     * @var accountSecurityPracticeUserInfo
     */
    public $accountSecurityPracticeUserInfo;
    /**
     * @var int
     */
    public $score;
    protected $_name = [
        'accountSecurityPracticeUserInfo' => 'AccountSecurityPracticeUserInfo',
        'score'                           => 'Score',
    ];

    public function validate()
    {
        if (null !== $this->accountSecurityPracticeUserInfo) {
            $this->accountSecurityPracticeUserInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountSecurityPracticeUserInfo) {
            $res['AccountSecurityPracticeUserInfo'] = null !== $this->accountSecurityPracticeUserInfo ? $this->accountSecurityPracticeUserInfo->toArray($noStream) : $this->accountSecurityPracticeUserInfo;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['AccountSecurityPracticeUserInfo'])) {
            $model->accountSecurityPracticeUserInfo = accountSecurityPracticeUserInfo::fromMap($map['AccountSecurityPracticeUserInfo']);
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
