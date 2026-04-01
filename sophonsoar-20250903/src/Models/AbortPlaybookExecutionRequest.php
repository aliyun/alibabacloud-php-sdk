<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class AbortPlaybookExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $playbookExecutionUuid;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $roleType;
    protected $_name = [
        'lang' => 'Lang',
        'playbookExecutionUuid' => 'PlaybookExecutionUuid',
        'playbookUuid' => 'PlaybookUuid',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->playbookExecutionUuid) {
            $res['PlaybookExecutionUuid'] = $this->playbookExecutionUuid;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PlaybookExecutionUuid'])) {
            $model->playbookExecutionUuid = $map['PlaybookExecutionUuid'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
