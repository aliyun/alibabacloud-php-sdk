<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;

class GetPlaybookRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $playbookVersion;

    /**
     * @var string
     */
    public $playbookVersionType;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'lang' => 'Lang',
        'playbookUuid' => 'PlaybookUuid',
        'playbookVersion' => 'PlaybookVersion',
        'playbookVersionType' => 'PlaybookVersionType',
        'roleFor' => 'RoleFor',
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

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->playbookVersion) {
            $res['PlaybookVersion'] = $this->playbookVersion;
        }

        if (null !== $this->playbookVersionType) {
            $res['PlaybookVersionType'] = $this->playbookVersionType;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['PlaybookVersion'])) {
            $model->playbookVersion = $map['PlaybookVersion'];
        }

        if (isset($map['PlaybookVersionType'])) {
            $model->playbookVersionType = $map['PlaybookVersionType'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
