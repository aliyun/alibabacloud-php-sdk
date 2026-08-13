<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class SyncOrgStructureShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $departmentsShrink;

    /**
     * @var string
     */
    public $membersShrink;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $ssoSettingsId;

    /**
     * @var bool
     */
    public $syncMembers;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'corpId' => 'corpId',
        'departmentsShrink' => 'departments',
        'membersShrink' => 'members',
        'platformType' => 'platformType',
        'ssoSettingsId' => 'ssoSettingsId',
        'syncMembers' => 'syncMembers',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }

        if (null !== $this->departmentsShrink) {
            $res['departments'] = $this->departmentsShrink;
        }

        if (null !== $this->membersShrink) {
            $res['members'] = $this->membersShrink;
        }

        if (null !== $this->platformType) {
            $res['platformType'] = $this->platformType;
        }

        if (null !== $this->ssoSettingsId) {
            $res['ssoSettingsId'] = $this->ssoSettingsId;
        }

        if (null !== $this->syncMembers) {
            $res['syncMembers'] = $this->syncMembers;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }

        if (isset($map['departments'])) {
            $model->departmentsShrink = $map['departments'];
        }

        if (isset($map['members'])) {
            $model->membersShrink = $map['members'];
        }

        if (isset($map['platformType'])) {
            $model->platformType = $map['platformType'];
        }

        if (isset($map['ssoSettingsId'])) {
            $model->ssoSettingsId = $map['ssoSettingsId'];
        }

        if (isset($map['syncMembers'])) {
            $model->syncMembers = $map['syncMembers'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
