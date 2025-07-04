<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class UpdateBootAndAntiUninstallPolicyShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $allowReport;

    /**
     * @var string
     */
    public $blockContentShrink;

    /**
     * @var bool
     */
    public $isAntiUninstall;

    /**
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
        'blockContentShrink' => 'BlockContent',
        'isAntiUninstall' => 'IsAntiUninstall',
        'isBoot' => 'IsBoot',
        'userGroupIds' => 'UserGroupIds',
        'whitelistUsers' => 'WhitelistUsers',
    ];

    public function validate()
    {
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->whitelistUsers)) {
            Model::validateArray($this->whitelistUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowReport) {
            $res['AllowReport'] = $this->allowReport;
        }

        if (null !== $this->blockContentShrink) {
            $res['BlockContent'] = $this->blockContentShrink;
        }

        if (null !== $this->isAntiUninstall) {
            $res['IsAntiUninstall'] = $this->isAntiUninstall;
        }

        if (null !== $this->isBoot) {
            $res['IsBoot'] = $this->isBoot;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whitelistUsers) {
            if (\is_array($this->whitelistUsers)) {
                $res['WhitelistUsers'] = [];
                $n1 = 0;
                foreach ($this->whitelistUsers as $item1) {
                    $res['WhitelistUsers'][$n1] = $item1;
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
        if (isset($map['AllowReport'])) {
            $model->allowReport = $map['AllowReport'];
        }

        if (isset($map['BlockContent'])) {
            $model->blockContentShrink = $map['BlockContent'];
        }

        if (isset($map['IsAntiUninstall'])) {
            $model->isAntiUninstall = $map['IsAntiUninstall'];
        }

        if (isset($map['IsBoot'])) {
            $model->isBoot = $map['IsBoot'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WhitelistUsers'])) {
            if (!empty($map['WhitelistUsers'])) {
                $model->whitelistUsers = [];
                $n1 = 0;
                foreach ($map['WhitelistUsers'] as $item1) {
                    $model->whitelistUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
