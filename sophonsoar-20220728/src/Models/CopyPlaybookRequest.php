<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class CopyPlaybookRequest extends Model
{
    /**
     * @example playbook description
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example playbook_xxx
     *
     * @var string
     */
    public $displayName;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 0
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @example 137602*****718726
     *
     * @var int
     */
    public $roleFor;

    /**
     * @example 0
     *
     * @var string
     */
    public $roleType;

    /**
     * @description This parameter is required.
     *
     * @example 94bc318c-****-4cba-****-801ccb0d739f
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CopyPlaybookRequest
     */
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
