<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody\userProfilePathRule\rules;

class userProfilePathRule extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @var string
     */
    public $userProfileRuleType;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'rules' => 'Rules',
        'userProfileRuleType' => 'UserProfileRuleType',
    ];

    public function validate()
    {
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userProfileRuleType) {
            $res['UserProfileRuleType'] = $this->userProfileRuleType;
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
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1++] = rules::fromMap($item1);
                }
            }
        }

        if (isset($map['UserProfileRuleType'])) {
            $model->userProfileRuleType = $map['UserProfileRuleType'];
        }

        return $model;
    }
}
