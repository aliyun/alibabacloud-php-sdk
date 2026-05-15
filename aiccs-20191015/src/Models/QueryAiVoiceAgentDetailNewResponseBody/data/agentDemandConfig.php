<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentDemandConfig extends Model
{
    /**
     * @var bool
     */
    public $aiGenerate;

    /**
     * @var string
     */
    public $basicTaskDescription;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var string
     */
    public $coreTarget;

    /**
     * @var string
     */
    public $sysRole;

    /**
     * @var string
     */
    public $userRole;
    protected $_name = [
        'aiGenerate' => 'AiGenerate',
        'basicTaskDescription' => 'BasicTaskDescription',
        'businessType' => 'BusinessType',
        'coreTarget' => 'CoreTarget',
        'sysRole' => 'SysRole',
        'userRole' => 'UserRole',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiGenerate) {
            $res['AiGenerate'] = $this->aiGenerate;
        }

        if (null !== $this->basicTaskDescription) {
            $res['BasicTaskDescription'] = $this->basicTaskDescription;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->coreTarget) {
            $res['CoreTarget'] = $this->coreTarget;
        }

        if (null !== $this->sysRole) {
            $res['SysRole'] = $this->sysRole;
        }

        if (null !== $this->userRole) {
            $res['UserRole'] = $this->userRole;
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
        if (isset($map['AiGenerate'])) {
            $model->aiGenerate = $map['AiGenerate'];
        }

        if (isset($map['BasicTaskDescription'])) {
            $model->basicTaskDescription = $map['BasicTaskDescription'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['CoreTarget'])) {
            $model->coreTarget = $map['CoreTarget'];
        }

        if (isset($map['SysRole'])) {
            $model->sysRole = $map['SysRole'];
        }

        if (isset($map['UserRole'])) {
            $model->userRole = $map['UserRole'];
        }

        return $model;
    }
}
