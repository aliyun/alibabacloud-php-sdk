<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateBootAndAntiUninstallPolicyRequest\blockContent;
use AlibabaCloud\Tea\Model;

class UpdateBootAndAntiUninstallPolicyRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowReport;

    /**
     * @var blockContent
     */
    public $blockContent;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAntiUninstall;

    /**
     * @example true
     *
     * @var bool
     */
    public $isBoot;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string[]
     */
    public $whitelistUsers;
    protected $_name = [
        'allowReport' => 'AllowReport',
        'blockContent' => 'BlockContent',
        'isAntiUninstall' => 'IsAntiUninstall',
        'isBoot' => 'IsBoot',
        'userGroupIds' => 'UserGroupIds',
        'whitelistUsers' => 'WhitelistUsers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowReport) {
            $res['AllowReport'] = $this->allowReport;
        }
        if (null !== $this->blockContent) {
            $res['BlockContent'] = null !== $this->blockContent ? $this->blockContent->toMap() : null;
        }
        if (null !== $this->isAntiUninstall) {
            $res['IsAntiUninstall'] = $this->isAntiUninstall;
        }
        if (null !== $this->isBoot) {
            $res['IsBoot'] = $this->isBoot;
        }
        if (null !== $this->userGroupIds) {
            $res['UserGroupIds'] = $this->userGroupIds;
        }
        if (null !== $this->whitelistUsers) {
            $res['WhitelistUsers'] = $this->whitelistUsers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBootAndAntiUninstallPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowReport'])) {
            $model->allowReport = $map['AllowReport'];
        }
        if (isset($map['BlockContent'])) {
            $model->blockContent = blockContent::fromMap($map['BlockContent']);
        }
        if (isset($map['IsAntiUninstall'])) {
            $model->isAntiUninstall = $map['IsAntiUninstall'];
        }
        if (isset($map['IsBoot'])) {
            $model->isBoot = $map['IsBoot'];
        }
        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = $map['UserGroupIds'];
            }
        }
        if (isset($map['WhitelistUsers'])) {
            if (!empty($map['WhitelistUsers'])) {
                $model->whitelistUsers = $map['WhitelistUsers'];
            }
        }

        return $model;
    }
}
