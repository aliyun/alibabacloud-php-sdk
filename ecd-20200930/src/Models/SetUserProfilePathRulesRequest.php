<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest\userProfilePathRule;

class SetUserProfilePathRulesRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var userProfilePathRule[]
     */
    public $userProfilePathRule;
    /**
     * @var string
     */
    public $userProfileRuleType;
    protected $_name = [
        'desktopGroupId'      => 'DesktopGroupId',
        'regionId'            => 'RegionId',
        'userProfilePathRule' => 'UserProfilePathRule',
        'userProfileRuleType' => 'UserProfileRuleType',
    ];

    public function validate()
    {
        if (\is_array($this->userProfilePathRule)) {
            Model::validateArray($this->userProfilePathRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->userProfilePathRule) {
            if (\is_array($this->userProfilePathRule)) {
                $res['UserProfilePathRule'] = [];
                $n1                         = 0;
                foreach ($this->userProfilePathRule as $item1) {
                    $res['UserProfilePathRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UserProfilePathRule'])) {
            if (!empty($map['UserProfilePathRule'])) {
                $model->userProfilePathRule = [];
                $n1                         = 0;
                foreach ($map['UserProfilePathRule'] as $item1) {
                    $model->userProfilePathRule[$n1++] = userProfilePathRule::fromMap($item1);
                }
            }
        }

        if (isset($map['UserProfileRuleType'])) {
            $model->userProfileRuleType = $map['UserProfileRuleType'];
        }

        return $model;
    }
}
