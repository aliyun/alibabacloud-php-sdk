<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetSkillRequest extends Model
{
    /**
     * @var bool
     */
    public $includeSkillFiles;

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
        'includeSkillFiles' => 'includeSkillFiles',
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
        if (null !== $this->includeSkillFiles) {
            $res['includeSkillFiles'] = $this->includeSkillFiles;
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
        if (isset($map['includeSkillFiles'])) {
            $model->includeSkillFiles = $map['includeSkillFiles'];
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
