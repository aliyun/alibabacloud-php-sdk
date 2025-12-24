<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class CopyPlaybookRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $sourcePlaybookUuid;
    protected $_name = [
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'lang' => 'Lang',
        'releaseVersion' => 'ReleaseVersion',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'sourcePlaybookUuid' => 'SourcePlaybookUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->sourcePlaybookUuid) {
            $res['SourcePlaybookUuid'] = $this->sourcePlaybookUuid;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['SourcePlaybookUuid'])) {
            $model->sourcePlaybookUuid = $map['SourcePlaybookUuid'];
        }

        return $model;
    }
}
