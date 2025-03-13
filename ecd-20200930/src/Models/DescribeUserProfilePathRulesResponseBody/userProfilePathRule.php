<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody\userProfilePathRule\rules;
use AlibabaCloud\Tea\Model;

class userProfilePathRule extends Model
{
    /**
     * @description The desktop group ID.
     *
     * @example dg-4i8fvpv6tfs03****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The directory rules.
     *
     * @var rules[]
     */
    public $rules;

    /**
     * @description The directory type that is configured for the directory.
     *
     * Valid values:
     *
     *   DesktopGroup
     *
     * <!-- -->
     *
     *   Default
     *
     * <!-- -->
     * @example Default
     *
     * @var string
     */
    public $userProfileRuleType;
    protected $_name = [
        'desktopGroupId'      => 'DesktopGroupId',
        'rules'               => 'Rules',
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
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return userProfilePathRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserProfileRuleType'])) {
            $model->userProfileRuleType = $map['UserProfileRuleType'];
        }

        return $model;
    }
}
