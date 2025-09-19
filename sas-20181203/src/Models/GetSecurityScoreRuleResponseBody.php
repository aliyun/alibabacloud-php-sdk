<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreCategoryList;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSecurityScoreRuleResponseBody\securityScoreRuleList;

class GetSecurityScoreRuleResponseBody extends Model
{
    /**
     * @var bool
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityScoreCategoryList[]
     */
    public $securityScoreCategoryList;

    /**
     * @var securityScoreRuleList[]
     */
    public $securityScoreRuleList;
    protected $_name = [
        'enableStatus' => 'EnableStatus',
        'requestId' => 'RequestId',
        'securityScoreCategoryList' => 'SecurityScoreCategoryList',
        'securityScoreRuleList' => 'SecurityScoreRuleList',
    ];

    public function validate()
    {
        if (\is_array($this->securityScoreCategoryList)) {
            Model::validateArray($this->securityScoreCategoryList);
        }
        if (\is_array($this->securityScoreRuleList)) {
            Model::validateArray($this->securityScoreRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityScoreCategoryList) {
            if (\is_array($this->securityScoreCategoryList)) {
                $res['SecurityScoreCategoryList'] = [];
                $n1 = 0;
                foreach ($this->securityScoreCategoryList as $item1) {
                    $res['SecurityScoreCategoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityScoreRuleList) {
            if (\is_array($this->securityScoreRuleList)) {
                $res['SecurityScoreRuleList'] = [];
                $n1 = 0;
                foreach ($this->securityScoreRuleList as $item1) {
                    $res['SecurityScoreRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityScoreCategoryList'])) {
            if (!empty($map['SecurityScoreCategoryList'])) {
                $model->securityScoreCategoryList = [];
                $n1 = 0;
                foreach ($map['SecurityScoreCategoryList'] as $item1) {
                    $model->securityScoreCategoryList[$n1] = securityScoreCategoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityScoreRuleList'])) {
            if (!empty($map['SecurityScoreRuleList'])) {
                $model->securityScoreRuleList = [];
                $n1 = 0;
                foreach ($map['SecurityScoreRuleList'] as $item1) {
                    $model->securityScoreRuleList[$n1] = securityScoreRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
