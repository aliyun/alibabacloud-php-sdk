<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetSkillRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var bool
     */
    public $includeSkillFiles;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

    /**
     * @var string
     */
    public $skillCode;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $viewMode;
    protected $_name = [
        'appToken' => 'appToken',
        'includeSkillFiles' => 'includeSkillFiles',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'skillCode' => 'skillCode',
        'skillName' => 'skillName',
        'tenantId' => 'tenantId',
        'viewMode' => 'viewMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->includeSkillFiles) {
            $res['includeSkillFiles'] = $this->includeSkillFiles;
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->skillCode) {
            $res['skillCode'] = $this->skillCode;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->viewMode) {
            $res['viewMode'] = $this->viewMode;
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['includeSkillFiles'])) {
            $model->includeSkillFiles = $map['includeSkillFiles'];
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['skillCode'])) {
            $model->skillCode = $map['skillCode'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['viewMode'])) {
            $model->viewMode = $map['viewMode'];
        }

        return $model;
    }
}
