<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest\userProfilePathRule;
use AlibabaCloud\Tea\Model;

class SetUserProfilePathRulesRequest extends Model
{
    /**
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var userProfilePathRule[]
     */
    public $userProfilePathRule;

    /**
     * @example DesktopGroup
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userProfilePathRule) {
            $res['UserProfilePathRule'] = [];
            if (null !== $this->userProfilePathRule && \is_array($this->userProfilePathRule)) {
                $n = 0;
                foreach ($this->userProfilePathRule as $item) {
                    $res['UserProfilePathRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userProfileRuleType) {
            $res['UserProfileRuleType'] = $this->userProfileRuleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetUserProfilePathRulesRequest
     */
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
                $n                          = 0;
                foreach ($map['UserProfilePathRule'] as $item) {
                    $model->userProfilePathRule[$n++] = null !== $item ? userProfilePathRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserProfileRuleType'])) {
            $model->userProfileRuleType = $map['UserProfileRuleType'];
        }

        return $model;
    }
}
