<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetBootAndAntiUninstallPolicyResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\GetBootAndAntiUninstallPolicyResponseBody\strategy\blockContent;
use AlibabaCloud\Tea\Model;

class strategy extends Model
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
     * @example 2023-04-16 10:50:05
     *
     * @var string
     */
    public $createTime;

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
     * @example auto-boot-anti-uninstall-6f6cbf5f6605****
     *
     * @var string
     */
    public $policyId;

    /**
     * @example approval-process-300abfb970cc****
     *
     * @var string
     */
    public $reportProcessId;

    /**
     * @example 2024-06-14 10:17:14
     *
     * @var string
     */
    public $updateTime;

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
        'createTime' => 'CreateTime',
        'isAntiUninstall' => 'IsAntiUninstall',
        'isBoot' => 'IsBoot',
        'policyId' => 'PolicyId',
        'reportProcessId' => 'ReportProcessId',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->isAntiUninstall) {
            $res['IsAntiUninstall'] = $this->isAntiUninstall;
        }
        if (null !== $this->isBoot) {
            $res['IsBoot'] = $this->isBoot;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->reportProcessId) {
            $res['ReportProcessId'] = $this->reportProcessId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
     * @return strategy
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IsAntiUninstall'])) {
            $model->isAntiUninstall = $map['IsAntiUninstall'];
        }
        if (isset($map['IsBoot'])) {
            $model->isBoot = $map['IsBoot'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['ReportProcessId'])) {
            $model->reportProcessId = $map['ReportProcessId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
