<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetUserProfilePathRulesShrinkRequest extends Model
{
    /**
     * @description The desktop group ID.
     *
     * @example dg-2i8qxpv6t1a03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The directories that you want to configure in the blacklist and whitelist.
     *
     * @var string
     */
    public $userProfilePathRuleShrink;

    /**
     * @description The directory type that you want to configure.
     *
     * Valid values:
     *
     *   Both_Default_DesktopGroup
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   DesktopGroup
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   Default
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example DesktopGroup
     *
     * @var string
     */
    public $userProfileRuleType;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'regionId' => 'RegionId',
        'userProfilePathRuleShrink' => 'UserProfilePathRule',
        'userProfileRuleType' => 'UserProfileRuleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userProfilePathRuleShrink) {
            $res['UserProfilePathRule'] = $this->userProfilePathRuleShrink;
        }
        if (null !== $this->userProfileRuleType) {
            $res['UserProfileRuleType'] = $this->userProfileRuleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetUserProfilePathRulesShrinkRequest
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
            $model->userProfilePathRuleShrink = $map['UserProfilePathRule'];
        }
        if (isset($map['UserProfileRuleType'])) {
            $model->userProfileRuleType = $map['UserProfileRuleType'];
        }

        return $model;
    }
}
