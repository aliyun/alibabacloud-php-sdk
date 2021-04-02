<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponse;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSecurityPracticeReportResponse\accountSecurityPracticeInfo\accountSecurityPracticeUserInfo;
use AlibabaCloud\Tea\Model;

class accountSecurityPracticeInfo extends Model
{
    /**
     * @var int
     */
    public $score;

    /**
     * @var accountSecurityPracticeUserInfo
     */
    public $accountSecurityPracticeUserInfo;
    protected $_name = [
        'score'                           => 'Score',
        'accountSecurityPracticeUserInfo' => 'AccountSecurityPracticeUserInfo',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('accountSecurityPracticeUserInfo', $this->accountSecurityPracticeUserInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->accountSecurityPracticeUserInfo) {
            $res['AccountSecurityPracticeUserInfo'] = null !== $this->accountSecurityPracticeUserInfo ? $this->accountSecurityPracticeUserInfo->toMap() : null;
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['AccountSecurityPracticeUserInfo'])) {
            $model->accountSecurityPracticeUserInfo = accountSecurityPracticeUserInfo::fromMap($map['AccountSecurityPracticeUserInfo']);
        }

        return $model;
    }
}
